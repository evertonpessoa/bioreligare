<?php

namespace App\Domain\User\Enums;

class ProfessionalRoleEnum
{
    public static function getMedicineRoles()
    {
        return [
            UserTypeEnum::PROFESSIONAL,
            ProfessionalTypeEnum::MEDICINE,
        ];
    }

    public static function getPsychologyRoles()
    {
        return [
            UserTypeEnum::PROFESSIONAL,
            ProfessionalTypeEnum::PSYCHOLOGY,
        ];
    }

    public static function getTherapyRoles()
    {
        return [
            UserTypeEnum::PROFESSIONAL,
            ProfessionalTypeEnum::THERAPY,
        ];
    }
}
