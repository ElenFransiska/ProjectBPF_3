@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Paket Katering</h1>

<div class="bg-white p-8 rounded-lg shadow-md">
    <form action="{{ route('paket.update', $paket['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Paket -->
            <div class="md:col-span-2">
                <label for="nama_paket" class="block text-sm font-medium text-gray-700 mb-1">Nama Paket</label>
                <input type="text" name="nama_paket" id="nama_paket" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" value="{{ $paket['nama_paket'] }}" required>
            </div>

            <!-- Deskripsi -->
            <div class="md:col-span-2">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Paket</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">{{ $paket['deskripsi'] }}</textarea>
            </div>

            <!-- Daftar Menu -->
            <div class="md:col-span-2">
                <label for="daftar_menu" class="block text-sm font-medium text-gray-700 mb-1">Daftar Menu (satu per baris)</label>
                <textarea name="daftar_menu" id="daftar_menu" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">{{ $paket['daftar_menu'] }}</textarea>
            </div>

            <!-- Harga per Pax -->
            <div>
                <label for="harga_per_pax" class="block text-sm font-medium text-gray-700 mb-1">Harga per Pax (Rp)</label>
                <input type="number" name="harga_per_pax" id="harga_per_pax" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" value="{{ $paket['harga_per_pax'] }}" required>
            </div>

            <!-- Minimum Pesanan -->
            <div>
                <label for="min_pesanan" class="block text-sm font-medium text-gray-700 mb-1">Minimum Pesanan (Porsi)</label>
                <input type="number" name="min_pesanan" id="min_pesanan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" value="{{ $paket['min_pesanan'] }}" required>
            </div>
        </div>

        <div class="mt-8 flex justify-end">
            <a href="{{ route('paket.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg mr-4">Batal</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">Update Paket</button>
        </div>
    </form>
</div>
@endsection
