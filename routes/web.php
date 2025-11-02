<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('landing');
})->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('/dashboard', DashboardController::class);
});