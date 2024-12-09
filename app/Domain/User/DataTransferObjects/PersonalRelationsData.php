<?php

namespace App\Domain\User\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Spatie\Permission\Models\Role;

class PersonalRelationsData extends DataTransferObject
{
    public EloquentCollection $roles;

    public static function fromInput(array $input)
    {
        return new self([
            'roles' => Role::whereIn('name', [$input['userType']])->get(),
        ]);
    }
}
