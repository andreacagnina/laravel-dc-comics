<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\HomeController as HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::resource('comics', ComicController::class);
Route::get('/{comic}/edit', [HomeController::class, 'edit'])->name('edit');
// Route::get('/{comic}/del', [HomeController::class, 'destroy'])->name('destroy');
