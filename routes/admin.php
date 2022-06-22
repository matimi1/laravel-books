<?php

/**
 * this file will contain all the routes for the administration interface
 */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index'])->name('admin.home');


// Route::group([], function() {

//     Route::get('/books', 'BookController@index');
//     Route::get('/books/{book_id}', 'BookController@show');
//     // Route::get('/books/{book_id}/edit', [Admin\BookController::class, 'edit']);
//     // Route::post('/books/{book_id}', [Admin\BookController::class, 'store']);

//     // Route::get('/authors', [Admin\AuthorController::class, 'index']);
//     // Route::get('/authors/{book_id}', [Admin\AuthorController::class, 'show']);
//     // Route::get('/authors/{author_id}/edit', [Admin\AuthorController::class, 'edit']);
//     // Route::get('/authors/{author_id}', [Admin\AuthorController::class, 'store']);

// });