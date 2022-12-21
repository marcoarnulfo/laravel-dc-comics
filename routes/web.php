<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
// io sono crud
Route::get('/', [ComicController::class, 'index'])->name('index');
Route::get('/create', [ComicController::class, 'create'])->name('create');
Route::post('/', [ComicController::class, 'store'])->name('store');