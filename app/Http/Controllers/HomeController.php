<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller{
    public function home(){
        $pakets = [
            [
                'nama' => 'Paket Nasi Kotak Special',
                'deskripsi' => 'Nasi, Rendang Daging, Ayam Gulai, Sayur Nangka, Sambal Ijo.',
                'harga' => 25000,
                'gambar' => 'https://images.unsplash.com/photo-1574894709920-31b29d1dc335?q=80&w=1887&auto=format&fit=crop'
            ],
            [
                'nama' => 'Prasmanan Meriah',
                'deskripsi' => 'Berbagai pilihan lauk pauk khas Padang disajikan secara prasmanan.',
                'harga' => 55000,
                'gambar' => 'https://images.unsplash.com/photo-1627063304562-5a2542a93902?q=80&w=1935&auto=format&fit=crop'
            ],
            [
                'nama' => 'Paket Acara Keluarga',
                'deskripsi' => 'Menu lengkap untuk acara arisan, ulang tahun, dan kumpul keluarga.',
                'harga' => 0, // Harga khusus, bisa diganti dengan teks
                'gambar' => 'https://images.unsplash.com/photo-1604255194595-54e4e3c6a489?q=80&w=1887&auto=format&fit=crop'
            ]
        ];

        return view('landing.home', compact('pakets'));
    }
    public function paket()
    {
        $pakets = [
            [
                'nama' => 'Paket Nasi Kotak Hemat',
                'deskripsi' => 'Nasi, Ayam Bakar, Sayur Nangka, Sambal Ijo.',
                'harga' => 20000,
                'gambar' => 'https://images.unsplash.com/photo-1604255194595-54e4e3c6a489?q=80&w=1887&auto=format&fit=crop'
            ],
            [
                'nama' => 'Paket Nasi Kotak Special',
                'deskripsi' => 'Nasi, Rendang Daging, Ayam Gulai, Sayur Nangka, Sambal Ijo.',
                'harga' => 25000,
                'gambar' => 'https://images.unsplash.com/photo-1574894709920-31b29d1dc335?q=80&w=1887&auto=format&fit=crop'
            ],
            [
                'nama' => 'Paket Nasi Rames',
                'deskripsi' => 'Nasi putih dengan pilihan 3 jenis lauk pendamping.',
                'harga' => 18000,
                'gambar' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=2070&auto=format&fit=crop'
            ],
            [
                'nama' => 'Prasmanan Meriah',
                'deskripsi' => 'Berbagai pilihan lauk pauk khas Padang disajikan secara prasmanan. Hubungi kami untuk detail menu.',
                'harga' => 55000,
                'gambar' => 'https://images.unsplash.com/photo-1627063304562-5a2542a93902?q=80&w=1935&auto=format&fit=crop'
            ],
            [
                'nama' => 'Prasmanan Akbar',
                'deskripsi' => 'Paket prasmanan paling lengkap dengan pilihan menu premium untuk acara besar dan istimewa.',
                'harga' => 85000,
                'gambar' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop'
            ],
             [
                'nama' => 'Paket Kopi Pagi',
                'deskripsi' => 'Sajian kopi, teh, dan aneka kue jajanan pasar untuk rapat atau acara pagi hari.',
                'harga' => 15000,
                'gambar' => 'https://images.unsplash.com/photo-1559925221-1249abd34159?q=80&w=1887&auto=format&fit=crop'
            ],
        ];
        return view('landing.paket', compact('pakets'));
    }
}
