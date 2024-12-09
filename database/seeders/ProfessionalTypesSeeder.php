<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionalTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professional_types')->insert([
            [
                'title' => 'Equipe Médica',
                'slug' => 'equipe-medica',
                'description' => 'exemplo medica',
                'banner_path' => 'banner-equipe-medica.jpg',
            ],
            [
                'title' => 'Equipe Terapêutica',
                'slug' => 'equipe-terapeutica',
                'description' => 'exemplo terapeutica',
                'banner_path' => 'banner-equipe-terapeutica.jpg',
            ]
        ]);
    }
}
