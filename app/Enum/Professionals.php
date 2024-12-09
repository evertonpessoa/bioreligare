<?php

namespace App\Enum;

final class Professionals
{
    private function __construct()
    {
    }

    public static function getProfessionals(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor A',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor C',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor L',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor P',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor K',
                'type' => 'Psiquiatria',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Mastologia',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Y',
                'type' => 'Mastologia',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getNeuroPsychologists(): array
    {
        return  [
            [
                'name' => 'Me. João Felipe de Souza Pegado',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/1341',
                'show' => false,
                'image' => asset('img/Me João Felpe.jpg'),
            ],
            [
                'name' => 'Ma. Michelle Cristine Mazzetto Betti',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 2991',
                'show' => false,
                'image' => asset('img/Michelle Betti.jpg'),
            ],
            [
                'name' => 'Esp. Roberta Montenegro Varella Dutra',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 1579',
                'show' => false,
                'image' => asset('img/Roberta.jpg'),
            ],
            [
                'name' => 'Esp. Ana Cristina Pinheiro ',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 2873',
                'show' => false,
                'image' => asset('img/Ana Cristina.png'),
            ],
            [
                'name' => 'Esp. Maria Valdilene de Oliveira ',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 2361',
                'show' => false,
                'image' => asset('img/Maria Valdilene.jpg'),
            ],
            [
                'name' => 'Esp. Marratima Dayanna da Silva Bezerra',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 5347',
                'show' => false,
                'image' => asset('img/equipeterapeutica.png'),
            ],
            [
                'name' => 'Esp. Ligia Cristina Borges Tinoc',
                'type' => 'Neuropsicologo',
                'desc' => 'CRP-RN 17/ 1450',
                'show' => false,
                'image' => asset('img/equipeterapeutica.png'),
            ],

        ];
    }

    public static function getMastologists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Mastologista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Mastologista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getNutritionists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Nutricionista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Nutricionista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getSpeechTherapists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Fonoaudiólogo',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Fonoaudiólogo',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getAcupuncturists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Acupulturista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Acupulturista',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getFloraltherapists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Floralterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Floralterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getColorTherapists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Cromoterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Cromoterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getAromaTherapists(): array
    {
        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Aromaterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Aromaterapeuta',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];
    }

    public static function getPediatricians(): array {

        return  [
            [
                'name' => 'Dr. Victor Adib Feitoza',
                'type' => 'Pediatra',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
            [
                'name' => 'Dr. Victor Z',
                'type' => 'Pediatra',
                'desc' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL - UFRN, 1985). Residência e Especialização em Mastologia (CREMERN, 1992). Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992). Conselho de Classe: CRM-RN 2119',
                'show' => false,
                'image' => 'equipeterapeutica.png',
            ],
        ];

    }
}
