<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| File ini berfungsi sebagai peta untuk semua URL di aplikasi Anda.
|
*/

//==========================================================================
// RUTE HALAMAN PUBLIK (UNTUK PELANGGAN)
//==========================================================================

// Halaman Utama (Homepage)
Route::get('/', [HomeController::class, 'home'])->name('home');

// Halaman untuk melihat semua paket katering
Route::get('/paket', [HomeController::class, 'paket'])->name('paket.public');

// Halaman untuk registrasi akun baru
Route::get('/register', [HomeController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [HomeController::class, 'register'])->name('register.post');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('users', UserController::class);
Route::resource('paket', PaketController::class);
Route::resource('pemesanan', PemesananController::class);

