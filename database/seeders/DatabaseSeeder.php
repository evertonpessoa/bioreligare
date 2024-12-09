<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LanguageSeeder::class,
            MedicalPlansSeeder::class,
            PatientGroupsSeeder::class,
            SpecialtyTypeSeeder::class,
            RolesSeeder::class,
            BannerSeeder::class,
            MapSeeder::class,
            ProfessionalTypesSeeder::class,
            SpecializationSeeder::class,
            ProceduresSeeder::class,
            MedicalSpecialitySeeder::class,
            ProfessionalProfilesSeeder::class,
            ProfessionalProfileSpecializationSeeder::class,
        ]);
    }
}
