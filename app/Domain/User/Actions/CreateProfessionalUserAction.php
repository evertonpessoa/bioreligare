<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Domain\User\DataTransferObjects\UserData;
use App\Domain\User\DataTransferObjects\PersonalProfileData;
use App\Domain\User\DataTransferObjects\ProfessionalProfileData;
use App\Domain\User\DataTransferObjects\ProfessionalRelationsData;

class CreateProfessionalUserAction
{
    protected $userCreator;
    protected $professionalProfileCreator;
    protected $personalProfileCreator;
    protected $professionalRelationsCreator;
    protected $userRoleSetter;

    public function __construct(
        CreateUserAction $userCreator,
        CreateProfessionalProfileAction $professionalProfileCreator,
        CreatePersonalProfileAction $personalProfileCreator,
        CreateProfessionalRelationshipsAction $professionalRelationsCreator,
        SetUserRolesAction $userRoleSetter
    ) {
        $this->userCreator = $userCreator;
        $this->professionalProfileCreator = $professionalProfileCreator;
        $this->personalProfileCreator = $personalProfileCreator;
        $this->professionalRelationsCreator = $professionalRelationsCreator;
        $this->userRoleSetter = $userRoleSetter;
    }

    public function execute(
        UserData $userData,
        PersonalProfileData $personalProfileData,
        ProfessionalProfileData $professionalProfileData,
        ProfessionalRelationsData $profesisonalRelationsData
    ): User {
        $user = $this->userCreator->execute($userData);
        $this->personalProfileCreator->execute($personalProfileData, $user);
        $this->professionalProfileCreator->execute($professionalProfileData, $user);
        $this->professionalRelationsCreator->execute($profesisonalRelationsData, $user->professionalProfile);
        $this->userRoleSetter->execute($user, $profesisonalRelationsData->roles);

        Event::dispatch(new Registered($user));

        return $user;
    }
}
