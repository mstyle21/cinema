<?php

use App\Http\Controllers\Admin\MovieCategoryController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RoomController;
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

Route::get('/movies/list', [MovieController::class, 'list'])->name('movies')->middleware('role:admin');
Route::get('/movie-categories/list', [MovieCategoryController::class, 'list'])->name('movie-categories');
Route::get('/rooms/list', [RoomController::class, 'list'])->name('rooms');


