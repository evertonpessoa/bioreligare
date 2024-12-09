<?php

namespace Database\Seeders;

use App\Domain\User\Models\MedicalPlan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicalPlan::insert(
            [
                ['name' => 'Particular', 'logo_path' => 'particular.png'],
                ['name' => 'Allianz', 'logo_path' => 'allianz.svg'],
                ['name' => 'Amil', 'logo_path' => 'amil.png'],
                ['name' => 'Bradesco', 'logo_path' => 'bradesco.png'],
                ['name' => 'Hapvida', 'logo_path' => 'hapvida.png'],
                ['name' => 'NotreDame Intermédica', 'logo_path' => 'notredame.png'],
                ['name' => 'Sompo', 'logo_path' => 'somposaude.jpg'],
                ['name' => 'Omint', 'logo_path' => 'omint.png'],
                ['name' => 'Prevent Senior', 'logo_path' => 'preventsenior.svg'],
                ['name' => 'Porto Seguro', 'logo_path' => 'portoseguro.png'],
                ['name' => 'Unimed', 'logo_path' => 'unimed.png'],
            ]
        );
    }
}
