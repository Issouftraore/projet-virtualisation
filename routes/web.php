<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('clients', ClientController::class);

// Route for borrowing a book
Route::post('books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');

// Route for listing books borrowed by a client
Route::get('clients/{client}/books', [ClientController::class, 'borrowedBooks'])->name('clients.borrowedBooks');

