<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalPlanController;
use App\Http\Controllers\MentalHealthController;
use App\Http\Controllers\MentalHealthPostController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ProfessionalTypeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__ . '/platform.php';

Route::domain(config('app.website_domain'))->name('institutional.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('saude-preventiva/{slug}', [SpecializationController::class, 'show'])->name('specializations.show');
    Route::get('saude-integrativa/{slug}', [SpecializationController::class, 'show'])->name('specializations.show');
    Route::get('clinica/{slug}', [ProfessionalTypeController::class, 'show'])->name('professional-type.show');

    Route::get('contato', [ContactController::class, 'show'])->name('contact.show');
    Route::post('contato', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');

    Route::get('dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('saude-mental',[MentalHealthController::class, 'show'])->name('mental-health.show');
    Route::get('convenios', [MedicalPlanController::class, 'show'])->name('health-insurances.show');
});
