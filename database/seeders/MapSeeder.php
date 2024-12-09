<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    public function run()
    {
        DB::table('maps')->insert([
            'main_phone' => '(84) 3636-8018',
            'contact_email' => 'contato@bioreligare.com',
            'facebook' => 'https://www.facebook.com/bioreligare/',
            'instagram' => 'https://www.instagram.com/clinicabioreligare/',
            'linkedin' => '',
            'map_image' => 'mapaFinalBioreligare.png',
            'whatsapp_principal' => '(84) 98819-1993',
            'endereco_rua_matriz' => 'Rua Coronel Joaquim Manoel',
            'endereco_numero_matriz' => '615',
            'endereco_complemento_matriz' => '(Sala 1701 - 17° Andar - Matriz)',
            'endereco_ponto_referencia_matriz' => 'Edificio Harmony Medical Center',
            'endereco_rua_filial' => '',
            'endereco_numero_filial' => '',
            'endereco_complemento_filial' => '',
            'endereco_ponto_referencia_filial' => '',
            'whatsapp_secundario' => '(84) 98863-1993',
            'filial_main_phone' => '(00) 0000-0000',
            'filial_main_whatsapp' => '(00) 0000-0000',
            'filial_secondary_whatsapp' => '(00) 0000-0000',
            'filial_contact_email' => 'contato@bioreligare.com',
        ]);
    }
}
