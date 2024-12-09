<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Domain\User\DataTransferObjects\UserData;
use App\Domain\User\DataTransferObjects\PersonalProfileData;
use App\Domain\User\DataTransferObjects\PersonalRelationsData;

class CreatePatientUserAction
{
    protected $userCreator;
    protected $personalProfileCreator;
    protected $userRoleSetter;

    public function __construct(
        CreateUserAction $userCreator,
        CreatePersonalProfileAction $personalProfileCreator,
        SetUserRolesAction $userRoleSetter
    ) {
        $this->userCreator = $userCreator;
        $this->personalProfileCreator = $personalProfileCreator;
        $this->userRoleSetter = $userRoleSetter;
    }

    public function execute(
        UserData $userData,
        PersonalProfileData $personalProfileData,
        PersonalRelationsData $personalRelationsData
    ): User {
        $user = $this->userCreator->execute($userData);
        $this->personalProfileCreator->execute($personalProfileData, $user);
        $this->userRoleSetter->execute($user, $personalRelationsData->roles);

        Event::dispatch(new Registered($user));

        return $user;
    }
}
