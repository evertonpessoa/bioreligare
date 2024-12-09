<?php

namespace App\Providers;

use App\Domain\User\Models\Map;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{

    public $mapInfo;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return 'Database\\Factories\\' . class_basename($modelName) . 'Factory';
        });

        // [Enviar dados para os Layouts]
        // Compartilha com todas as views os valores que populam o footer. Estes dados estão disponíveis em todo o site.
        // $mapInfo = Map::all();
        // View::share('mapInfo', $mapInfo);
    }
}
