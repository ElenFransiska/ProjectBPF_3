<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data paket katering statis
        $pakets = [
            [
                'id' => 1,
                'nama_paket' => 'Nasi Kotak Hemat',
                'harga_per_pax' => 25000,
                'min_pesanan' => 30,
            ],
            [
                'id' => 2,
                'nama_paket' => 'Prasmanan Silver',
                'harga_per_pax' => 55000,
                'min_pesanan' => 50,
            ],
            [
                'id' => 3,
                'nama_paket' => 'Coffee Break Classic',
                'harga_per_pax' => 35000,
                'min_pesanan' => 40,
            ],
        ];
        return view('paket.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simulasi proses penyimpanan
        return redirect()->route('paket.index')->with('success', 'Paket katering baru berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Data paket statis untuk form edit
        $paket = [
            'id' => $id,
            'nama_paket' => 'Prasmanan Silver',
            'deskripsi' => 'Paket prasmanan lengkap untuk acara spesial Anda dengan menu pilihan terbaik.',
            'daftar_menu' => "Nasi Putih\nRendang Daging\nAyam Bakar\nSayur Nangka\nSambal Ijo\nKerupuk Udang\nBuah Potong\nAir Mineral",
            'harga_per_pax' => 55000,
            'min_pesanan' => 50,
        ];
        return view('paket.edit', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Simulasi proses update
        return redirect()->route('paket.index')->with('success', 'Data paket katering berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Simulasi proses hapus
        return redirect()->route('paket.index')->with('success', 'Paket katering berhasil dihapus.');
    }
}