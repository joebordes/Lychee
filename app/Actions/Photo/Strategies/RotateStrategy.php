<?php

namespace App\Actions\Photo\Strategies;

use App\Actions\Photo\Extensions\SourceFileInfo;
use App\Contracts\LycheeException;
use App\Contracts\SizeVariantFactory;
use App\Contracts\SizeVariantNamingStrategy;
use App\Exceptions\Internal\IllegalOrderOfOperationException;
use App\Exceptions\Internal\InvalidRotationDirectionException;
use App\Exceptions\MediaFileOperationException;
use App\Exceptions\MediaFileUnsupportedException;
use App\Image\ImageHandlerInterface;
use App\Image\TemporaryLocalFile;
use App\Metadata\Extractor;
use App\Models\Logs;
use App\Models\Photo;
use App\Models\SizeVariant;

class RotateStrategy extends AddBaseStrategy
{
	protected int $direction;

	/**
	 * @param Photo $photo
	 * @param int   $direction
	 *
	 * @throws MediaFileUnsupportedException     thrown, if $photo cannot be
	 *                                           rotated
	 * @throws InvalidRotationDirectionException thrown if $direction does
	 *                                           neither equal -1 nor 1
	 * @throws IllegalOrderOfOperationException
	 */
	public function __construct(Photo $photo, int $direction)
	{
		// We exploit the "add strategy" here, because rotation of a photo
		// has a lot in common with adding a new photo.
		// We first make a temporary copy of the photo, rotate that copy
		// and then "re-import" that temporary copy into an existing photo
		// model.
		// As we want the temporary file to be moved back into place,
		// we delete the "imported" file and do not want to import via symlink.
		// We do not want to skip duplicates (in case the photo is already a
		// duplicate, we still want to rotate it) and we want to re-sync
		// metadata (after rotation width, height and filesize may have changed).
		//
		// In case the photo has originally been imported as a symbolic link,
		// the photo won't be a symbolic link after rotation, but become an
		// independent file which is detached from the original target of the
		// symbolic link.
		// This is by design.
		// The two alternatives would be:
		//  1. Rotate the original photo which the symlink points to.
		//  2. Bail out with an error message, if the user attempts to rotate
		//     a photo that was imported via a symlink
		// After discussion among the developers, option 1 was considered a
		// no-go and 2 was considered to be too restrictive.
		parent::__construct(
			new AddStrategyParameters(
				new ImportMode(true, false, false, true)
			),
			$photo
		);
		if ($photo->isVideo()) {
			$msg = 'Trying to rotate a video';
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new MediaFileUnsupportedException($msg);
		}
		if ($photo->live_photo_short_path !== null) {
			$msg = 'Trying to rotate a live photo';
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new MediaFileUnsupportedException($msg);
		}
		if ($photo->isRaw()) {
			$msg = 'Trying to rotate a raw file';
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new MediaFileUnsupportedException($msg);
		}
		// direction is valid?
		if (($direction != 1) && ($direction != -1)) {
			$msg = 'Direction must be 1 or -1';
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new InvalidRotationDirectionException();
		}
		$this->direction = $direction;
	}

	/**
	 * @return Photo
	 *
	 * @throws LycheeException
	 */
	public function do(): Photo
	{
		// Generate a temporary name for the rotated file.
		$oldOriginalSizeVariant = $this->photo->size_variants->getOriginal();
		$oldOriginalWidth = $oldOriginalSizeVariant->width;
		$oldOriginalHeight = $oldOriginalSizeVariant->height;
		$oldChecksum = $this->photo->checksum;
		$origFile = $oldOriginalSizeVariant->getFile();
		$tmpFile = new TemporaryLocalFile();

		// Rotate the image and save result as the temporary file
		/** @var ImageHandlerInterface $imageHandler */
		$imageHandler = resolve(ImageHandlerInterface::class);
		// TODO: If we ever wish to support something else than local files, ImageHandler must work on resource streams, not absolute file names (see ImageHandlerInterface)
		if ($imageHandler->rotate($origFile->getAbsolutePath(), ($this->direction == 1) ? 90 : -90, $tmpFile->getAbsolutePath()) === false) {
			$msg = 'Failed to rotate ' . $origFile->getRelativePath();
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new MediaFileOperationException($msg);
		}

		// The file size and checksum may have changed after the rotation.
		/* @var Extractor $metadataExtractor */
		$metadataExtractor = resolve(Extractor::class);
		// TODO: See above, we must stop using absolute paths
		$this->photo->filesize = $metadataExtractor->filesize($tmpFile->getAbsolutePath());
		$this->photo->checksum = $metadataExtractor->checksum($tmpFile->getAbsolutePath());
		$this->photo->save();

		// Delete all size variants from current photo, this will also take
		// care of erasing the actual "physical" files from storage and any
		// potential symbolic link which points to one of the original files.
		// This will bring photo entity into the same state as it would be if
		// we were importing a new photo.
		$this->photo->size_variants->deleteAll();

		// Initialize factory for size variants
		$this->parameters->sourceFileInfo = SourceFileInfo::createByTempFile(
			$this->photo->title, $origFile->getExtension(), $tmpFile
		);

		/** @var SizeVariantNamingStrategy $namingStrategy */
		$namingStrategy = resolve(SizeVariantNamingStrategy::class);
		$namingStrategy->setFallbackExtension($this->parameters->sourceFileInfo->getOriginalExtension());
		/** @var SizeVariantFactory $sizeVariantFactory */
		$sizeVariantFactory = resolve(SizeVariantFactory::class);
		$sizeVariantFactory->init($this->photo, $namingStrategy);

		// Create size variant for rotated original
		// Note that this also creates a different file name than before
		// because the checksum of the photo has changed.
		// Using a different filename allows avoiding caching effects.
		// Sic! Swap width and height here, because the image has been rotated
		$newOriginalSizeVariant = $sizeVariantFactory->createOriginal($oldOriginalHeight, $oldOriginalWidth);
		$this->putSourceIntoFinalDestination($newOriginalSizeVariant->short_path);

		// Create remaining size variants
		$newSizeVariants = null;
		try {
			$newSizeVariants = $sizeVariantFactory->createSizeVariants();
			// add new original size variant to collection of newly created
			// size variants; we need this to correctly update the duplicates
			// below
			$newSizeVariants->add($newOriginalSizeVariant);
		} catch (\Throwable $t) {
			// Don't re-throw the exception, because we do not want the
			// import to fail completely only due to missing size variants.
			// There are just too many options why the creation of size
			// variants may fail: the user has uploaded an unsupported file
			// format, GD and Imagick are both not available or disabled
			// by configuration, etc.
			Logs::error(__METHOD__, __LINE__, 'Failed to generate size variants, error was ' . $t->getMessage());
		}

		// Clean up factory
		$sizeVariantFactory->cleanup();

		// Deal with duplicates.  We simply update all of them to match.
		$duplicates = Photo::query()
				->where('checksum', '=', $oldChecksum)
				->get();
		/** @var Photo $duplicate */
		foreach ($duplicates as $duplicate) {
			$duplicate->filesize = $this->photo->filesize;
			$duplicate->checksum = $this->photo->checksum;
			// Note: It is not correct to simply update the existing size
			// variants of the duplicates.
			// Due to rotation the number and type of size variants may have
			// changed, too.
			// So we actually have to do a 3-way merge and update:
			//  1. delete size variants of the duplicates which do not exist
			//     anymore,
			//  2. update size variants of the duplicates which still exist,
			//     and
			//  3. add new size variants to duplicates which
			// haven't existed before.
			// For simplicity, we simply delete all size variants of the
			// duplicates and re-create them.
			// Deleting the size variants of the duplicates has also the
			// advantage that the actual files are erased from storage.
			$duplicate->size_variants->deleteAll();
			if ($newSizeVariants) {
				/** @var SizeVariant $newSizeVariant */
				foreach ($newSizeVariants as $newSizeVariant) {
					$duplicate->size_variants->create(
						$newSizeVariant->type,
						$newSizeVariant->short_path,
						$newSizeVariant->width,
						$newSizeVariant->height
					);
				}
			}
			$duplicate->save();
		}

		return $this->photo;
	}
}
