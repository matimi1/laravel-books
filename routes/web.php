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
use App\Http\Controllers\BookController;


Route::get('/', function () {

    $books = \App\Models\Book::orderBy('title')->limit(100)->get();

    $books->load('authors');

    return view('index/index', compact('books'));

})->name('homepage');

Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about-us');

Route::get('/books/popular', [BookController::class, 'popular']);
