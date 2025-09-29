@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Pengguna: {{ $user['nama'] }}</h1>

    <form action="{{ route('users.update', $user['id']) }}" method="POST">
        @csrf <!-- Token Keamanan Laravel -->
        @method('PUT') <!-- Metode untuk Update -->

        <!-- Nama Pengguna -->
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 text-sm font-semibold mb-2">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="{{ $user['nama'] }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Alamat Email</label>
            <input type="email" id="email" name="email" value="{{ $user['email'] }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
        </div>
        
        <!-- Peran (Role) -->
        <div class="mb-6">
            <label for="role" class="block text-gray-700 text-sm font-semibold mb-2">Peran (Role)</label>
            <select id="role" name="role" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                <option value="Pelanggan" @if($user['role'] == 'Pelanggan') selected @endif>Pelanggan</option>
                <option value="Admin" @if($user['role'] == 'Admin') selected @endif>Admin</option>
            </select>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('users.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 font-semibold">
                Batal
            </a>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 font-semibold">
                Perbarui Pengguna
            </button>
        </div>
    </form>
</div>
@endsection
