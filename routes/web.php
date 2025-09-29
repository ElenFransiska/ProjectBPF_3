<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditugaskan ke grup middleware "web".
|
*/

// Rute untuk Halaman Pelanggan (Publik)
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/paket', [LandingController::class, 'paket'])->name('paket.public');


// Rute Autentikasi untuk Admin
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rute untuk Panel Admin
Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('users', UserController::class);
Route::resource('paket', PaketController::class); // Baris ini membuat route 'paket.index'
Route::resource('pemesanan', PemesananController::class);

