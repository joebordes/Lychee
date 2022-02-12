<?php

namespace App\Http\Requests\Traits;

use Illuminate\Database\Eloquent\Collection;

/**
 * @template T of AbstractAlbum
 */
trait HasAlbumsTrait
{
	/**
	 * @var Collection<T>
	 */
	protected Collection $albums;

	/**
	 * @return Collection<T>
	 */
	public function albums(): Collection
	{
		return $this->albums;
	}
}
