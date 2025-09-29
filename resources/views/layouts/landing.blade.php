<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Nan Kanduang - Katering Masakan Padang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Header -->
    <header class="absolute top-0 left-0 right-0 z-20">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-white">
                Warung Nan Kanduang
            </a>
            <!-- Navigasi Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-white hover:text-amber-200 transition">Home</a>
                <a href="/paket" class="text-white hover:text-amber-200 transition">Paket Katering</a>
                <a href="#lokasi" class="text-white hover:text-amber-200 transition">Lokasi</a>
                <a href="#kontak" class="bg-amber-800 text-white font-bold px-5 py-2 rounded-md hover:bg-amber-900 transition duration-300">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white py-4">
        <div class="container mx-auto px-6 text-center text-gray-600">
            &copy; {{ date('Y') }} Warung Nan Kanduang. All Rights Reserved.
        </div>
    </footer>

</body>
</html>

