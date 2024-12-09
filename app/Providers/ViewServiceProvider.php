<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\FooterComposer;
use App\View\Composers\NavigationComposer;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('layouts.institutional.footer', FooterComposer::class);

        View::composer(
            ['layouts.institutional.navigation', 'components.navigation-home', 'layouts.institutional.navigation-mobile'],
            NavigationComposer::class
        );
    }
}
