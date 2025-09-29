<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Data statis sebagai pengganti database untuk simulasi.
     */
    private function getUsersData()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Admin Resto',
                'email' => 'admin@resto.com',
                'role' => 'Admin'
            ],
            [
                'id' => 2,
                'nama' => 'Budi Pelanggan',
                'email' => 'budi@example.com',
                'role' => 'Pelanggan'
            ],
            [
                'id' => 3,
                'nama' => 'Citra Lestari',
                'email' => 'citra@example.com',
                'role' => 'Pelanggan'
            ],
        ];
    }

    public function index()
    {
        $users = $this->getUsersData();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('users.index')
                         ->with('success', 'Pengguna baru berhasil ditambahkan! (Simulasi)');
    }

    public function show(string $id)
    {
        // Tidak digunakan
    }

    /**
     * Menampilkan form untuk mengedit pengguna.
     */
    public function edit(string $id)
    {
        // Cari pengguna berdasarkan ID (simulasi)
        $users = $this->getUsersData();
        $userToEdit = null;
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $userToEdit = $user;
                break;
            }
        }

        // Jika pengguna tidak ditemukan, kembali ke halaman daftar
        if (!$userToEdit) {
            return redirect()->route('users.index')->with('error', 'Pengguna tidak ditemukan!');
        }

        return view('users.edit', ['user' => $userToEdit]);
    }

    /**
     * Memperbarui data pengguna di database (simulasi).
     */
    public function update(Request $request, string $id)
    {
        // Logika update seharusnya ada di sini
        return redirect()->route('users.index')
                         ->with('success', "Data pengguna berhasil diperbarui! (Simulasi untuk ID: {$id})");
    }

    /**
     * Menghapus pengguna dari database (simulasi).
     */
    public function destroy(string $id)
    {
        // Logika hapus seharusnya ada di sini
        return redirect()->route('users.index')
                         ->with('success', "Pengguna berhasil dihapus! (Simulasi untuk ID: {$id})");
    }
}

