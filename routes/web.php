<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MostFamousController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return redirect('/books');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'index')->name('books');
});

Route::controller(MostFamousController::class)->group(function () {
    Route::get('/most-famous-author', 'index')->name('famous-author');
});