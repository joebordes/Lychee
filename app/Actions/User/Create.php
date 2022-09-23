<?php

namespace App\Actions\User;

use App\Exceptions\ConflictingPropertyException;
use App\Exceptions\InvalidPropertyException;
use App\Exceptions\ModelDBException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Create
{
	/**
	 * @throws InvalidPropertyException
	 * @throws ModelDBException
	 */
	public function do(string $username, string $password, bool $mayUpload, bool $isLocked): User
	{
		if (User::query()->where('username', '=', $username)->count() !== 0) {
			throw new ConflictingPropertyException('Username already exists');
		}
		$user = new User();
		$user->may_upload = $mayUpload;
		$user->is_locked = $isLocked;
		$user->username = $username;
		$user->password = Hash::make($password);
		$user->save();

		return $user;
	}
}
