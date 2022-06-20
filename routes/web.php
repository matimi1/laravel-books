<?php

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

use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('index/index');
})->name('homepage');

Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about-us');
