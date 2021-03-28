<?php

use App\Http\Controllers\CourierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
//Route::get('/', MainController::class);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/page/about', [PageController::class, 'show'])->name('page.about');

Route::resource('/couriers', CourierController::class);
