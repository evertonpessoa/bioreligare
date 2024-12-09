<?php

namespace App\Domain\User\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class UserData extends DataTransferObject
{
    public string $email;

    public string $password;

    public string $firstName;

    public string $lastName;

    public static function fromInput(array $input)
    {
        return new self([
            'email' => $input['email'],
            'password' => $input['password'],
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
        ]);
    }
}
