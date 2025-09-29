@extends('layouts.landing')

@section('content')

<!-- Page Header Section -->
<section class="relative h-[40vh] flex items-center justify-center text-white" style="background-image: url('https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=1974&auto=format&fit=crop'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Pilihan Paket Katering Kami</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-200">Temukan paket yang paling sesuai untuk acara Anda.</p>
    </div>
</section>

<!-- Daftar Paket Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($semuaPaket as $paket)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
                <div class="overflow-hidden">
                    <img src="{{ $paket['gambar'] }}" alt="{{ $paket['nama'] }}" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold mb-2 text-amber-900">{{ $paket['nama'] }}</h3>
                    <p class="text-gray-700 text-sm mb-4 flex-grow">{{ $paket['deskripsi'] }}</p>
                    <div class="mt-auto pt-4 border-t">
                        <p class="text-sm text-gray-500 mb-1">Mulai dari</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-2xl text-amber-800">Rp {{ number_format($paket['harga'], 0, ',', '.') }}<span class="text-base font-normal">/pax</span></span>
                        </div>
                         <p class="text-xs text-gray-500 mt-2">Minimum pemesanan: {{ $paket['min_pesanan'] }} pax</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-lg">Saat ini belum ada paket yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection

