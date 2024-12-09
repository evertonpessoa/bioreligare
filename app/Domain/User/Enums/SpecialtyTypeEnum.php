<?php

namespace App\Domain\User\Enums;

class SpecialtyTypeEnum
{
    const INTEGRATIVE = 'integrativa';
    const PREVENTIVE = 'preventiva';

    public static function getAll()
    {
        return [
            self::INTEGRATIVE,
            self::PREVENTIVE,
        ];
    }
}
