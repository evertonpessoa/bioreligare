<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DataTransferObjects\UserData;
use App\Domain\User\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function execute(UserData $userData): User
    {
        return User::create([
            'email' => $userData->email,
            'password' => Hash::make($userData->password),
            'first_name' => $userData->firstName,
            'last_name' => $userData->lastName,
        ]);
    }
}
