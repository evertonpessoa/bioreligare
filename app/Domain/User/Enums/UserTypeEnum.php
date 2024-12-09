<?php

namespace App\Domain\User\Enums;

class UserTypeEnum
{
    const PROFESSIONAL = 'professional';
    const PATIENT = 'patient';

    public static function getAll()
    {
        return [
            self::PROFESSIONAL,
            self::PATIENT,
        ];
    }
}
