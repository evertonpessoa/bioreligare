<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run()
    {
        DB::table('banners')->insert([
            [
                'placement' => 'home_principal',
                'image_path' => 'banner1.jpg',
                'description' => 'Por uma cultura de paz, saúde e bem estar.',
                'link' => '',
                'title' => 'Banner Home 1',
            ],
            [
                'placement' => 'home_sessao2',
                'image_path' => 'banner2.png',
                'description' => 'O real processo da vida, começa dentro de nós.',
                'link' => '/saude-mental',
                'title' => 'Banner 2',
            ],
            [
                'placement' => 'home_sessao3',
                'image_path' => 'banner3.jpg',
                'description' => '',
                'link' => '',
                'title' => 'Banner 3',
            ],
        ]);
    }
}
