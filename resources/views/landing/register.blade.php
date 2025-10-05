@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-amber-50 flex items-center justify-center py-24 px-4">
    <div class="container mx-auto">
        <div class="bg-white rounded-2xl shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl mx-auto">

            <!-- Kolom Kanan: Form Registrasi -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="text-center md:text-left mb-8">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-amber-900 hover:text-amber-700 transition">Warung Nan Kanduang</a>
                    <h2 class="mt-4 text-3xl font-bold text-gray-800">Buat Akun Baru</h2>
                    <p class="mt-2 text-sm text-gray-500">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-medium text-amber-800 hover:text-amber-700">
                            Login di sini
                        </a>
                    </p>
                </div>

                <form action="{{ route('register.post') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input id="name" name="name" type="text" required value="{{ old('name') }}"
                               class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                        @error('name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input id="email" name="email" type="email" required value="{{ old('email') }}"
                               class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                               class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                        @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                               class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-amber-800 hover:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-300">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Kolom Kiri: Gambar -->
            <div class="hidden md:block w-1/2 relative">
                <img src="https://images.unsplash.com/photo-1534080564583-6be75777b70a?q=80&w=1887&auto-format&fit=crop"
                     alt="Sajian Masakan Padang"
                     class="absolute h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-10 left-10 text-white">
                    <h2 class="text-3xl font-bold">Pengalaman Rasa Autentik.</h2>
                    <p class="mt-2">Bergabunglah bersama kami dan nikmati kemudahan memesan katering berkualitas.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

