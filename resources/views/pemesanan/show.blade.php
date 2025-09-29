@extends('layouts.app')

@section('content')
<div class="flex items-center mb-6">
    <a href="{{ route('pemesanan.index') }}" class="text-blue-600 hover:text-blue-800 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </a>
    <h1 class="text-3xl font-semibold">Detail Pemesanan: {{ $pemesanan['no_pesanan'] }}</h1>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <!-- Kolom Info Utama -->
        <div class="md:col-span-2 space-y-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Informasi Pelanggan</h3>
                <p class="text-gray-600"><strong>Nama:</strong> {{ $pemesanan['nama_pelanggan'] }}</p>
                <p class="text-gray-600"><strong>Telepon:</strong> {{ $pemesanan['telepon_pelanggan'] }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Informasi Acara</h3>
                <p class="text-gray-600"><strong>Tanggal:</strong> {{ $pemesanan['tanggal_acara'] }}</p>
                <p class="text-gray-600"><strong>Waktu:</strong> {{ $pemesanan['waktu_acara'] }}</p>
                <p class="text-gray-600"><strong>Lokasi:</strong> {{ $pemesanan['lokasi_acara'] }}</p>
            </div>
            @if($pemesanan['catatan'])
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Catatan Tambahan</h3>
                <p class="text-gray-600 italic">"{{ $pemesanan['catatan'] }}"</p>
            </div>
            @endif
        </div>
        
        <!-- Kolom Info Harga & Status -->
        <div class="bg-gray-50 p-4 rounded-lg space-y-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Status Pesanan</h3>
                 @php
                    $statusClass = '';
                    switch ($pemesanan['status']) {
                        case 'Terkonfirmasi': $statusClass = 'bg-blue-100 text-blue-800'; break;
                        case 'Menunggu DP': $statusClass = 'bg-yellow-100 text-yellow-800'; break;
                        case 'Selesai': $statusClass = 'bg-green-100 text-green-800'; break;
                        case 'Dibatalkan': $statusClass = 'bg-red-100 text-red-800'; break;
                    }
                @endphp
                <p class="px-3 py-1 font-semibold leading-tight {{ $statusClass }} rounded-full inline-block">{{ $pemesanan['status'] }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Ringkasan Biaya</h3>
                <p class="text-gray-600">{{ $pemesanan['jumlah_pax'] }} pax × Rp {{ number_format($pemesanan['harga_per_pax'], 0, ',', '.') }}</p>
                <p class="text-2xl font-bold text-gray-900 mt-2">Total: Rp {{ number_format($pemesanan['total_harga'], 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
    
    <!-- Detail Item Menu -->
    <div class="px-6 pb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Rincian Menu dalam Paket "{{ $pemesanan['paket_dipesan'] }}"</h3>
        <div class="border rounded-lg overflow-hidden">
            <ul class="divide-y divide-gray-200">
                @foreach($pemesanan['items'] as $item)
                <li class="px-4 py-3 flex justify-between items-center">
                    <span class="text-gray-700">{{ $item['nama'] }}</span>
                    @if($item['keterangan'])
                    <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-md">{{ $item['keterangan'] }}</span>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
