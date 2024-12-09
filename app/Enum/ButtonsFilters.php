<?php

namespace App\Enum;

final class ButtonsFilters
{
    private function __construct()
    {
    }

    public static function getTherapeuticFilters(): array
    {
        return  [
            [
                'text' => 'Floralterapia',
                'image' => asset('img/floralterapia.png'),
            ],
            [
                'text' => 'Psicologia',
                'image' => asset('img/psicologia.png'),
            ],
            [
                'text' => 'Aromaterapia',
                'image' => asset('img/aromaterapia.png'),
            ],
            [
                'text' => 'Nutrição',
                'image' => asset('img/nutricao.png'),
            ],
            [
                'text' => 'Fonoaudiologia',
                'image' => asset('img/fonoaudiologia.png'),
            ],
            [
                'text' => 'Acupuntura',
                'image' => asset('img/acupuntura.png'),
            ],
            [
                'text' => 'Terapia Ocupacional',
                'image' => asset('img/acupuntura.png'),
            ],
            [
                'text' => 'Neuropsicologis',
                'image' => asset('img/neuropsicologia.png'),
            ],
            [
                'text' => 'Cromoterapia',
                'image' => asset('img/cromoterapia.png'),
            ],
        ];
    }

    public static function getMedicalFilters(): array
    {
        return  [
            [
                'text' => 'Psiquiatria',
                'image' => asset('img/psiquiatria.png'),
            ],
            [
                'text' => 'Mastologia',
                'image' => asset('img/mastologia.png'),
            ],
        ];
    }
}
