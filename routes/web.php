<?php

use App\Http\Controllers\CinemaController as CinemaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CinemaController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/film/{id}', [CinemaController::class, 'film'])
    ->middleware(['auth'])
    ->name('film');

require __DIR__.'/auth.php';
