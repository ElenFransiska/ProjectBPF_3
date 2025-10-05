@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang di Dashboard Admin</h1>
    <p class="text-gray-600 mb-8">Gunakan menu navigasi di samping untuk mengelola konten website katering Anda.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card Manajemen Paket -->
        <a href="{{ route('paket.index') }}" class="block p-6 bg-amber-100 rounded-lg hover:bg-amber-200 transition-transform transform hover:-translate-y-1">
            <h3 class="font-bold text-lg text-amber-800">Manajemen Paket</h3>
            <p class="text-amber-700 mt-2">Tambah, edit, atau hapus paket katering yang ditawarkan.</p>
        </a>

        <!-- Card Manajemen Pesanan -->
        <a href="{{ route('pemesanan.index') }}" class="block p-6 bg-blue-100 rounded-lg hover:bg-blue-200 transition-transform transform hover:-translate-y-1">
            <h3 class="font-bold text-lg text-blue-800">Manajemen Pemesanan</h3>
            <p class="text-blue-700 mt-2">Lihat dan kelola semua pesanan katering yang masuk.</p>
        </a>

        <!-- Card Manajemen Pengguna -->
        <a href="{{ route('users.index') }}" class="block p-6 bg-green-100 rounded-lg hover:bg-green-200 transition-transform transform hover:-translate-y-1">
            <h3 class="font-bold text-lg text-green-800">Manajemen Pengguna</h3>
            <p class="text-green-700 mt-2">Kelola akun admin dan pelanggan terdaftar.</p>
        </a>
    </div>
</div>
@endsection

