@extends('layouts.app')

@section('content')

<!-- Header Halaman -->
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Manajemen Pengguna</h1>
    <a href="{{ route('users.create') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 font-semibold shadow-sm">
        + Tambah Pengguna Baru
    </a>
</div>

<!-- Menampilkan pesan sukses (jika ada) -->
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<!-- Tabel Daftar Pengguna -->
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <th class="px-5 py-3">Nama</th>
                    <th class="px-5 py-3">Email</th>
                    <th class="px-5 py-3">Peran (Role)</th>
                    <th class="px-5 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="px-5 py-4 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $user['nama'] }}</p>
                    </td>
                    <td class="px-5 py-4 text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $user['email'] }}</p>
                    </td>
                    <td class="px-5 py-4 text-sm">
                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight
                            @if($user['role'] == 'Admin') text-green-900 @else text-blue-900 @endif">
                            <span aria-hidden class="absolute inset-0 
                                @if($user['role'] == 'Admin') bg-green-200 @else bg-blue-200 @endif 
                                opacity-50 rounded-full"></span>
                            <span class="relative">{{ $user['role'] }}</span>
                        </span>
                    </td>
                    <td class="px-5 py-4 text-sm text-center">
                        <div class="flex item-center justify-center">
                            <!-- TOMBOL EDIT AKTIF -->
                            <a href="{{ route('users.edit', $user['id']) }}" class="text-blue-600 hover:text-blue-900 mr-4 font-semibold">Edit</a>
                            
                            <!-- FORM HAPUS AKTIF -->
                            <form action="{{ route('users.destroy', $user['id']) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus pengguna ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold" style="background:none; border:none; padding:0; cursor:pointer;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-10 text-gray-500">
                        Belum ada pengguna yang terdaftar.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

