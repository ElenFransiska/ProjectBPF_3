<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data statis untuk simulasi
        $pemesanans = [
            [
                'id' => 1,
                'no_pesanan' => 'CAT-001',
                'nama_pelanggan' => 'Budi Santoso',
                'tanggal_acara' => '2025-10-15',
                'total_harga' => 1500000,
                'status' => 'Terkonfirmasi'
            ],
            [
                'id' => 2,
                'no_pesanan' => 'CAT-002',
                'nama_pelanggan' => 'Citra Lestari',
                'tanggal_acara' => '2025-10-20',
                'total_harga' => 2500000,
                'status' => 'Menunggu DP'
            ],
            [
                'id' => 3,
                'no_pesanan' => 'CAT-003',
                'nama_pelanggan' => 'PT. Maju Jaya',
                'tanggal_acara' => '2025-09-30',
                'total_harga' => 7500000,
                'status' => 'Selesai'
            ],
            [
                'id' => 4,
                'no_pesanan' => 'CAT-004',
                'nama_pelanggan' => 'Keluarga Wijaya',
                'tanggal_acara' => '2025-11-05',
                'total_harga' => 3200000,
                'status' => 'Dibatalkan'
            ],
        ];

        // Ganti nama rute 'orders.index' menjadi 'pemesanan.index'
        return view('pemesanan.index', compact('pemesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Simulasi mencari data berdasarkan ID
        $pemesanan = [
            'id' => $id,
            'no_pesanan' => 'CAT-001',
            'nama_pelanggan' => 'Budi Santoso',
            'telepon_pelanggan' => '081234567890',
            'tanggal_acara' => '15 Oktober 2025',
            'waktu_acara' => '12:00 WIB',
            'lokasi_acara' => 'Jl. Merdeka No. 10, Jakarta',
            'paket_dipesan' => 'Paket Prasmanan Gold',
            'jumlah_pax' => 50,
            'harga_per_pax' => 30000,
            'total_harga' => 1500000,
            'status' => 'Terkonfirmasi',
            'catatan' => 'Mohon sediakan piring tambahan untuk tamu VIP.',
            'items' => [
                ['nama' => 'Nasi Putih', 'keterangan' => ''],
                ['nama' => 'Rendang Daging', 'keterangan' => 'Pedas Sedang'],
                ['nama' => 'Ayam Pop', 'keterangan' => ''],
                ['nama' => 'Gulai Nangka', 'keterangan' => ''],
                ['nama' => 'Perkedel', 'keterangan' => ''],
                ['nama' => 'Sambal Ijo', 'keterangan' => ''],
                ['nama' => 'Kerupuk Kulit', 'keterangan' => ''],
                ['nama' => 'Es Teh Manis', 'keterangan' => ''],
                ['nama' => 'Buah Potong', 'keterangan' => 'Semangka, Melon'],
            ]
        ];

        return view('pemesanan.show', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

