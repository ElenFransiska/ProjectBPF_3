<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
   
    public function home()
    {
        $pakets = [
            [
                'nama' => 'Paket Nasi Kotak Hemat',
                'deskripsi' => 'Nasi, Rendang, Daun Singkong, Sambal Hijau.',
                'harga' => 25000,
                'gambar' => 'https://images.unsplash.com/photo-1568600891621-c2f30b2d3923?q=80&w=1915&auto=format&fit=crop'
            ],
            [
                'nama' => 'Paket Prasmanan Silver',
                'deskripsi' => 'Pilihan 5 menu utama, 2 menu pendamping, dan buah.',
                'harga' => 55000,
                'gambar' => 'https://images.unsplash.com/photo-1625944239901-29792f0391b1?q=80&w=2070&auto=format&fit=crop'
            ],
            [
                'nama' => 'Paket Pernikahan Gold',
                'deskripsi' => 'Layanan lengkap dengan 10+ menu pilihan dan stall.',
                'harga' => 120000,
                'gambar' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1964&auto=format&fit=crop'
            ],
        ];

        return view('landing.home', compact('pakets'));
    }

    
    public function paket()
    {
        return view('landing.paket');
    }

    public function showRegistrationForm()
    {
        return view('landing.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
            ],
        ]);
        if ($validator->fails()) {
            return redirect()->route('register.show')
                        ->withErrors($validator)
                        ->withInput();
        }
        return redirect()->route('home')->with('success', 'Akun Anda berhasil dibuat!');
    }
}

