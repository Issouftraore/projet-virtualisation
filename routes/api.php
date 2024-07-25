<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;

Route::apiResource('books', [BookController::class, 'index']);
Route::post('books', [BookController::class, 'store']);
Route::get('books/{book}', [BookController::class, 'show']);
Route::put('books/{book}', [BookController::class, 'update']);
Route::delete('books/{book}', [BookController::class, 'destroy']);
Route::post('books/{book}/borrow', [BookController::class, 'borrow']);
Route::get('categories', [BookController::class, 'create']);  // Assuming this is to fetch categories
Route::get('books/{book}/edit', [BookController::class, 'edit']);  // Assuming this is to fetch book details for editing


// Routes for CategoryController
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{category}', [CategoryController::class, 'show']);
Route::put('categories/{category}', [CategoryController::class, 'update']);
Route::delete('categories/{category}', [CategoryController::class, 'destroy']);

// Routes for ClientController
Route::get('clients', [ClientController::class, 'index']);
Route::post('clients', [ClientController::class, 'store']);
Route::get('clients/{client}', [ClientController::class, 'show']);
Route::put('clients/{client}', [ClientController::class, 'update']);
Route::delete('clients/{client}', [ClientController::class, 'destroy']);
Route::get('clients/{clientId}/borrowedBooks', [ClientController::class, 'borrowedBooks']);
