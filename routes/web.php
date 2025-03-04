<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    PortfolioController,
    ProjetController
};

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

Route::get('/', [PortfolioController::class, 'index'])->name('accueil');

Route::get('/projets', [ProjetController::class, 'index'])->name('projets');

Route::get('projets/{id}', [ProjetController::class, 'show'])->name('projets.show');