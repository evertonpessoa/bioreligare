<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class SetUserRolesAction
{
    public function execute(User $user, EloquentCollection $roles): User
    {
        $user->assignRole($roles);

        return $user;
    }
}
