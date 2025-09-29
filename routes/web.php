<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\HomeController; // Menggunakan HomeController yang baru

Route::get('/', [HomeController::class, 'home'])->name('home'); // Sudah diubah ke HomeController
Route::get('/paket', [HomeController::class, 'paket'])->name('paket.public'); // Sudah diubah ke HomeController

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('users', UserController::class);
Route::resource('paket', PaketController::class);
Route::resource('pemesanan', PemesananController::class);

