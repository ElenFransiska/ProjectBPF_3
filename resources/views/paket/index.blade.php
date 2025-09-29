@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Manajemen Paket Katering</h1>
    <a href="{{ route('paket.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
        + Tambah Paket Baru
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr class="border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <th class="px-5 py-3">Nama Paket</th>
                    <th class="px-5 py-3">Harga per Pax</th>
                    <th class="px-5 py-3">Min. Pesanan</th>
                    <th class="px-5 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pakets as $paket)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="px-5 py-4 text-sm font-semibold">{{ $paket['nama_paket'] }}</td>
                    <td class="px-5 py-4 text-sm">Rp {{ number_format($paket['harga_per_pax'], 0, ',', '.') }}</td>
                    <td class="px-5 py-4 text-sm">{{ $paket['min_pesanan'] }} porsi</td>
                    <td class="px-5 py-4 text-sm text-center">
                        <a href="{{ route('paket.edit', $paket['id']) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold mr-4">Edit</a>
                        <form action="{{ route('paket.destroy', $paket['id']) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus paket ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="text-center py-10 text-gray-500">Belum ada paket katering yang ditambahkan.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
