<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Menampilkan halaman utama (homepage) untuk pelanggan.
     */
    public function home()
    {
        // Untuk saat ini, kita hanya menampilkan view.
        // Nanti kita bisa tambahkan data paket unggulan di sini.
        return view('landing.home');
    }

    /**
     * Menampilkan daftar semua paket katering kepada pelanggan.
     */
    public function paket()
    {
        // Kita akan menggunakan kembali data statis dari PaketController untuk simulasi
        $pakets = [
            [
                'id' => 1,
                'nama_paket' => 'Paket Nasi Kotak Hemat',
                'deskripsi' => 'Paket nasi kotak lengkap dengan lauk pauk pilihan, cocok untuk acara kantor atau syukuran.',
                'harga' => 25000,
                'min_pesanan' => 30,
                'gambar' => 'https://placehold.co/600x400/f97316/ffffff?text=Nasi+Kotak'
            ],
            [
                'id' => 2,
                'nama_paket' => 'Paket Prasmanan Silver',
                'deskripsi' => 'Sajian prasmanan dengan 5 menu utama, 2 pendamping, dan buah. Ideal untuk acara keluarga.',
                'harga' => 55000,
                'min_pesanan' => 50,
                'gambar' => 'https://placehold.co/600x400/f97316/ffffff?text=Prasmanan'
            ],
            [
                'id' => 3,
                'nama_paket' => 'Paket Pernikahan Gold',
                'deskripsi' => 'Paket katering pernikahan mewah dengan gubukan, hidangan penutup, dan layanan profesional.',
                'harga' => 120000,
                'min_pesanan' => 100,
                'gambar' => 'https://placehold.co/600x400/f97316/ffffff?text=Pernikahan'
            ],
        ];

        return view('landing.paket', compact('pakets'));
    }
}
