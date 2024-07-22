<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserBookController;

// Route::middleware('auth')->group(function () {
Route::get('/api/books', [BookController::class, 'index']);
Route::post('/api/borrow', [BookController::class, 'store']);
Route::post('/api/return-book', [BookController::class, 'returnBook']);
Route::get('/api/my-library', [UserBookController::class, 'index']);
// });