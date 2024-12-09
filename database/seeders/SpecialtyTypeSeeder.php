<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtyTypeSeeder extends Seeder
{
    public function run()
    {
        $now = now();
        DB::table('specialty_type')->insert([
            'title' => 'Preventiva',
            'slug' => 'preventiva',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('specialty_type')->insert([
            'title' => 'Integrativa',
            'slug' => 'integrativa',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
