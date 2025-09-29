@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang di Dashboard</h1>
        <p class="text-gray-600 mb-8">Pilih menu di bawah untuk mulai mengelola Resto Padang Anda.</p>

        <!-- Menampilkan pesan sukses setelah login -->
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card Manajemen Produk -->
            <a href="{{ route('produk.index') }}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h5 class="text-xl font-bold mb-2 text-green-700">Manajemen Produk</h5>
                <p class="text-gray-700">Tambah, lihat, edit, dan hapus menu makanan.</p>
            </a>
            
            <!-- Card Manajemen Order -->
            <a href="{{ route('orders.index') }}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h5 class="text-xl font-bold mb-2 text-blue-700">Manajemen Pesanan</h5>
                <p class="text-gray-700">Kelola pesanan yang masuk dari pelanggan.</p>
            </a>

            <!-- Card Manajemen User -->
            <a href="{{ route('users.index') }}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h5 class="text-xl font-bold mb-2 text-purple-700">Manajemen Pengguna</h5>
                <p class="text-gray-700">Kelola akun admin dan pelanggan.</p>
            </a>
        </div>
    </div>
@endsection
