<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MovieController;
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

Route::get('/', [HomeController::class, 'list'])->name('home');
Route::get('/movie/{id}', [MovieController::class, 'details'])->name('movie');
Route::post('/movie/search', [MovieController::class, 'search'])->name('movie-search');
Route::get('/movie/reservation/{id}', [MovieController::class, 'reservation'])->name('movie-reservation');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
