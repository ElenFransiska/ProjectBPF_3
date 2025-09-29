@extends('layouts.landing')

@section('content')

<!-- Hero Section with Background Image -->
<section class="relative h-screen flex items-center justify-center text-white" style="background-image: url('https://i.pinimg.com/1200x/e8/c3/f2/e8c3f2eb0b35f9fb1c059917fbb74650.jpg'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight">Ragam Menu Pilihan</h1>
        <p class="mt-4 text-xl md:text-2xl text-gray-200">Kualitas terbaik untuk setiap sajian di acara Anda.</p>
        <a href="/paket" class="mt-8 inline-block border-2 border-white text-white font-bold px-8 py-3 rounded-md text-lg hover:bg-white hover:text-black transition duration-300">EXPLORE</a>
    </div>
</section>

<!-- Tentang Kami Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="https://i.pinimg.com/736x/8a/13/40/8a1340c9ede243da61b98adf8ca1664c.jpg" alt="Sajian Masakan Padang" class="rounded-lg shadow-xl">
        </div>
        <div class="text-left">
            <h2 class="text-3xl font-bold mb-4">Selamat Datang di Rumah Makan Nan Kanduang</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">
                Warung Nan Kanduang adalah penyedia layanan katering spesialis masakan Padang autentik di Pekanbaru. Kami berkomitmen untuk menyajikan hidangan berkualitas tinggi dengan resep tradisional yang kaya akan rasa untuk memeriahkan setiap momen spesial Anda, mulai dari acara keluarga, rapat kantor, hingga perayaan besar.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Percayakan kebutuhan konsumsi Anda kepada kami dan nikmati kemudahan serta kelezatan masakan Minang yang tak terlupakan.
            </p>
        </div>
    </div>
</section>


<!-- Fitur Layanan Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Fitur 1: Catering Service -->
            <div>
                <div class="mx-auto w-24 h-24 flex items-center justify-center bg-amber-800 text-white rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <h3 class="text-2xl font-bold mb-2">Catering Service</h3>
                <p class="text-gray-600">Layanan katering profesional untuk berbagai jenis acara, besar maupun kecil.</p>
            </div>
            <!-- Fitur 2: Paket Nasi Box -->
            <div>
                <div class="mx-auto w-24 h-24 flex items-center justify-center bg-amber-800 text-white rounded-full mb-4">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                </div>
                <h3 class="text-2xl font-bold mb-2">Paket Nasi Box</h3>
                <p class="text-gray-600">Praktis dan lezat, tersedia berbagai pilihan menu nasi kotak untuk segala kebutuhan.</p>
            </div>
            <!-- Fitur 3: Kerjasama -->
            <div>
                <div class="mx-auto w-24 h-24 flex items-center justify-center bg-amber-800 text-white rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                </div>
                <h3 class="text-2xl font-bold mb-2">Kerjasama</h3>
                <p class="text-gray-600">Kami membuka peluang kerjasama untuk korporat, event organizer, dan lainnya.</p>
            </div>
        </div>
    </div>
</section>

<!-- Paket Unggulan Section -->
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
            <!-- Paket 2 -->
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

<!-- Lokasi & Kontak Section -->
<section id="lokasi" class="py-20 bg-gray-50">
     <div class="container mx-auto px-6 text-center">
         <h2 class="text-3xl font-bold mb-12">Lokasi & Kontak</h2>
         <div class="grid md:grid-cols-2 gap-12 items-center">
             <!-- Google Maps Iframe -->
             <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.67911663435!2d101.4359810871582!3d0.510444600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac1c5148339d%3A0x9584855018d423a4!2sMal%20Pekanbaru!5e0!3m2!1sen!2sid!4v1664373309831!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
             </div>
             <!-- Kontak Info -->
             <div id="kontak" class="text-left">
                <div class="flex items-start mb-6">
                    <div class="text-amber-800 mr-4 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Alamat</h4>
                        <p class="text-gray-600">Jl. Jend. Sudirman No. 123, Pekanbaru, Riau</p>
                    </div>
                </div>
                 <div class="flex items-start">
                    <div class="text-amber-800 mr-4 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Hubungi Kami</h4>
                        <p class="text-gray-600">Email: kontak@nan-kanduang.com</p>
                        <p class="text-gray-600">Telepon: (021) 123-4567</p>
                    </div>
                </div>
             </div>
         </div>
     </div>
</section>

@endsection

