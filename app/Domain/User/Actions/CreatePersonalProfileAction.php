<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use App\Domain\User\Models\PersonalProfile;
use App\Domain\User\DataTransferObjects\PersonalProfileData;

class CreatePersonalProfileAction
{
    public function execute(PersonalProfileData $personalData, User $user): PersonalProfile
    {
        return tap(
            PersonalProfile::create([
                'user_id' => $user->id,
                'cpf' => $personalData->cpfDocument,
                'rg' => $personalData->rgDocument,
                'gender' => $personalData->gender,
                'birthday' => $personalData->birthday,
                'profession' => $personalData->profession,
                'phone' => $personalData->phone,
                'picture_url' => $personalData->photo,
                'accept_scientific_collab' => $personalData->acceptsSciCollab,
            ]),
            fn (PersonalProfile $personal) => $personal->address()->create($personalData->address->toArray())
        );
    }
}
