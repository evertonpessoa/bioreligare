<?php

namespace App\Domain\User\Enums;

class ProfessionalTypeEnum
{
    // tests (system)
    const MEDICINE = 'medicine';
    const PSYCHOLOGY = 'psychology';
    const THERAPY = 'therapy';

    // website
    const MEDICAL = 'equipe-medica';
    const THERAPEUTIC = 'equipe-terapeutica';


    public static function getAll(): array
    {
        return [
            self::MEDICINE,
            self::PSYCHOLOGY,
            self::THERAPY,
            self::MEDICAL,
            self::THERAPEUTIC
        ];
    }
}
