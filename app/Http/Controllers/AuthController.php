<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Fungsi ini untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Fungsi ini untuk memproses login (TANPA DATABASE)
    public function login(Request $request)
    {
        // Simulasi: Anggap saja login selalu berhasil
        // Nanti di sini akan ada validasi dan pengecekan ke database
        
        // Redirect ke halaman utama setelah "berhasil" login
        return redirect('/')->with('status', 'Anda berhasil login!');
    }

    // Fungsi untuk logout (TANPA DATABASE)
    public function logout()
    {
        // Simulasi: Anggap saja logout selalu berhasil
        // Nanti di sini akan ada proses menghapus session
        
        return redirect('/login')->with('status', 'Anda berhasil logout!');
    }
}
