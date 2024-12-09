<?php

namespace App\Http\Controllers;

use App\Domain\User\Models\Banner;
use App\Domain\User\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

// Teste 2
class HomeController extends Controller
{

    public function index()
    {

        // Retorna todos os banners + Retorna o último banner que foi cadastrado [ok]
        // $banners = Banner::latest()->first();
        // dd($banners);

        // Pega todos os banners (a home terá vários banners) + depois trataremos este dado
        $banners = Banner::all();

        // Filtra cada posicionamento + atribui a uma variável para ser usada na view
        $banner1 = $banners->filter(function($banner){
            return $banner->placement == 'home_principal';
        });

        $banner2 = $banners->filter(function($banner){
            return $banner->placement == 'home_sessao2';
        });

        $banner3 = $banners->filter(function($banner){
            return $banner->placement == 'home_sessao3';
        });

        // Mapas
        $mapInfo = Map::all();


        return view('pages.institutional.home', [
            'banner1' => $banner1,
            'banner2' => $banner2,
            'banner3' => $banner3,
            'mapInfo' => $mapInfo
        ]);
    }
}
