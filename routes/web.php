<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return redirect('/login');
});

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login.index');
        Route::post('/login', 'login')->name('login.authentication');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('register.index');
        Route::post('/register', 'register')->name('register.registering');
    });
});