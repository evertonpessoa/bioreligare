<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Platform routes
|--------------------------------------------------------------------------
| There are the route definitions for the bioreligare platform
| platforma.bioreligare.com.br/{routes}
|
*/
Route::domain(config('app.platform_domain'))->name('platform.')->group(function () {
    Route::get('/', fn () => view('platform'))->name('index');
    Route::get('/para-pacientes', fn () => view('pages.platform.to-patients'))->name('to-patients');
    Route::get('/para-profissionais', fn () => view('pages.platform.to-professionals'))->name('to-professionals');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';
});
