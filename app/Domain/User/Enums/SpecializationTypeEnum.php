<?php

namespace App\Domain\User\Enums;

class SpecializationTypeEnum
{
    const PSYCHOLOGY_AREA = 'psychology_area';
    const PSYCHOLOGY_APPORACH = 'psychology_approach';
    const MEDICINE_SPECIALIZATION = 'medicine_specialization';

    public static function getAll(): array
    {
        return [
            self::PSYCHOLOGY_AREA,
            self::PSYCHOLOGY_APPORACH,
            self::MEDICINE_SPECIALIZATION,
        ];
    }
}
