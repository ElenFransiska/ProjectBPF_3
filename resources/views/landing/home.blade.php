@extends('layouts.landing')

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center text-white p-6">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight drop-shadow-lg">Ragam Menu Pilihan</h1>
        <p class="mt-4 text-xl md:text-2xl drop-shadow-md">Kualitas terbaik untuk setiap sajian di acara Anda.</p>
        <a href="#paket-unggulan" class="mt-8 inline-block bg-amber-800 text-white font-bold px-8 py-3 rounded-md text-lg border-2 border-amber-800 hover:bg-transparent hover:border-white transition duration-300">
            EXPLORE
        </a>
    </div>
</div>

<!-- Services Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-6 text-center">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Service 1 -->
            <div class="text-center">
                <div class="mx-auto bg-amber-100 rounded-full h-24 w-24 flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Catering Service</h3>
                <p class="text-gray-600">Layanan katering profesional untuk berbagai jenis acara, besar maupun kecil.</p>
            </div>
            <!-- Service 2 -->
            <div class="text-center">
                <div class="mx-auto bg-amber-100 rounded-full h-24 w-24 flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Paket Nasi Box</h3>
                <p class="text-gray-600">Praktis dan lezat, tersedia berbagai pilihan menu nasi kotak untuk segala kebutuhan.</p>
            </div>
            <!-- Service 3 -->
            <div class="text-center">
                <div class="mx-auto bg-amber-100 rounded-full h-24 w-24 flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Kerjasama</h3>
                <p class="text-gray-600">Kami membuka peluang kerjasama untuk korporat, event organizer, dan lainnya.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="bg-amber-50 py-16">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-amber-900 mb-4">Selamat Datang di Warung Nan Kanduang</h2>
            <p class="text-gray-700 max-w-3xl mx-auto">
                Warung Nan Kanduang adalah penyedia layanan katering masakan Padang yang berdedikasi untuk menyajikan cita rasa autentik Minangkabau di setiap acara Anda. Dengan resep warisan keluarga dan bahan baku pilihan, kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan.
            </p>
        </div>
    </div>
</section>


<!-- Featured Packages Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12">Paket Unggulan Kami</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Paket 1 -->
            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                <img src="https://i.pinimg.com/1200x/6d/a1/a1/6da1a1d543466781a220cd31e957c28e.jpg" alt="Paket Nasi Kotak" class="w-full h-56 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-xl font-bold mb-2">Paket Nasi Kotak Special</h3>
                    <p class="text-gray-600 mb-4">Nasi, Rendang Daging, Ayam Gulai, Sayur Nangka, Sambal Ijo.</p>
                    <div class="text-lg font-bold text-amber-800">Rp 25.000 /pax</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/15/3f/b9/153fb997d2401da904e076061d784f4d.jpg" alt="Paket Prasmanan" class="w-full h-56 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-xl font-bold mb-2">Prasmanan Meriah</h3>
                    <p class="text-gray-600 mb-4">Berbagai pilihan lauk pauk khas Padang disajikan secara prasmanan.</p>
                    <div class="text-lg font-bold text-amber-800">Mulai dari Rp 55.000 /pax</div>
                </div>
            </div>
            <!-- Paket 3 -->
            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                <img src="https://i.pinimg.com/1200x/8c/88/96/8c8896811b8775c1106f6f0f41e00dfd.jpg" alt="Paket Acara Keluarga" class="w-full h-56 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-xl font-bold mb-2">Paket Acara Keluarga</h3>
                    <p class="text-gray-600 mb-4">Menu lengkap untuk acara arisan, ulang tahun, dan kumpul keluarga.</p>
                    <div class="text-lg font-bold text-amber-800">Hubungi untuk harga</div>
                </div>
            </div>
        </div>
        <a href="/paket" class="mt-12 inline-block bg-amber-800 text-white font-bold px-8 py-3 rounded-md text-lg hover:bg-amber-900 transition duration-300">Lihat Semua Paket</a>
    </div>
</section>


<!-- Location & Contact Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-amber-900">Lokasi & Kontak</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Map -->
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.66435941614!2d101.4451073152543!3d0.5100079637373859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac1a27c6591b%3A0x8b598f3c428a2a5!2sJl.%20Jend.%20Sudirman%2C%20Pekanbaru%2C%20Riau!5e0!3m2!1sen!2sid!4v1664373516141!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-md"></iframe>
            </div>
            <!-- Contact Info -->
            <div class="space-y-4">
                 <div>
                    <h3 class="text-xl font-bold text-amber-900 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Alamat
                    </h3>
                    <p class="text-gray-700 ml-8">Jl. Jend. Sudirman No. 123, Pekanbaru, Riau</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-amber-900 flex items-center">
                         <svg class="w-6 h-6 mr-2 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Hubungi Kami
                    </h3>
                    <p class="text-gray-700 ml-8">Email: kontak@nan-kanduang.com</p>
                    <p class="text-gray-700 ml-8">Telepon: (021) 123-4567</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

