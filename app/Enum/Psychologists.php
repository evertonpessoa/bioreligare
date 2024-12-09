<?php

namespace App\Enum;

final class Psychologists
{
    private function __construct()
    {
    }

    public static function getPsychologists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Psicólogo',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
            ],
            [
                'name' => 'Dr. Victor K',
                'type' => 'Psicólogo',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
            ],
        ];
    }
}
