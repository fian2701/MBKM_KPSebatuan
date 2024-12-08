<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profile Web')</title>
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Profil Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans mt-0 pt-0 ">
<nav class="bg-[#399918] dark:border-gray-700 fixed top-0 w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse"
        class="flex items-center space-x-3 rtl:space-x-reverse bg-gray-900 p-2 rounded-lg hover:bg-green-700 transition-all">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"
        class="h-14" alt="Flowbite Logo"
            class="h-10 w-10 rounded-full object-cover" 
                 alt="Logo Kabupaten Sambas" />
            <span class="self-center text-2x2 font-semibold whitespace-nowrap text-white">Desa Sebatuan</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div>
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100; rounded-lg bg-[#399918] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#399918] border-white">
            <li>
            <a href="/" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Profile Desa</a>
            </li>
            <li>
            <a href="Berita" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
            </li>
            <li>
            <a href="Statistik" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Statistik</a>
            </li>
            <li>
            <a href="potensi-desa" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Potensi Desa</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Header -->
    <header class="bg-gradient-to-r from-purple-500 to-blue-500 text-white text-center py-8 shadow-md mt-24">
        <h1 class="text-4xl font-bold mb-2">Berita Terbaru</h1>
        <p class="text-lg">Tetap update dengan informasi terkini</p>
    </header>

    <!-- News Section -->
    <main class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Berita 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Penerapan PSAK Meningkatkan Transparansi</h2>
                    <p class="text-gray-600 mb-4">Penerapan PSAK memberikan dfampak positif bagi perusahaan publik dalam meningkatkan transparansi dan akuntabilitas laporan keuangan.</p>
                    <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Baca Selengkapnya</a>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Berita 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Tips Mengelola Keuangan di Era Digital</h2>
                    <p class="text-gray-600 mb-4">Pelajari bagaimana teknologi dapat membantu Anda dalam mengelola keuangan secara lebih efektif dan efisien.</p>
                    <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Baca Selengkapnya</a>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Berita 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Strategi Bisnis di Masa Krisis Ekonomi</h2>
                    <p class="text-gray-600 mb-4">Bagaimana strategi bisnis dapat membantu perusahaan tetap bertahan di tengah tantangan ekonomi global.</p>
                    <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Baca Selengkapnya</a>
                </div>
            </article>
        </div>
    </main>

    <!-- Prestasi Desa Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Prestasi Desa</h2>
            <p class="text-lg text-gray-600 mb-8">Desa kami telah mencapai berbagai prestasi yang membanggakan, mulai dari sektor pendidikan hingga pengembangan infrastruktur.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-blue-500 text-white rounded-lg p-6 shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Juara Lomba Desa Terbaik</h3>
                    <p class="text-gray-200">Desa kami terpilih sebagai juara lomba desa tingkat provinsi dengan skor tertinggi dalam berbagai aspek pembangunan.</p>
                </div>
                <div class="bg-green-500 text-white rounded-lg p-6 shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Inovasi Pertanian Modern</h3>
                    <p class="text-gray-200">Program pertanian berbasis teknologi yang kami jalankan telah mendapatkan penghargaan nasional.</p>
                </div>
                <div class="bg-yellow-500 text-white rounded-lg p-6 shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Penghargaan Kebersihan Lingkungan</h3>
                    <p class="text-gray-200">Desa kami juga meraih penghargaan atas upaya kami dalam menjaga kebersihan dan keindahan lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Keindahan Desa Section -->
    <section class="bg-gray-200 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Keindahan Desa</h2>
            <p class="text-lg text-gray-600 mb-8">Desa kami menawarkan pemandangan alam yang menakjubkan, dengan berbagai tempat wisata yang menarik untuk dikunjungi.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="relative rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/500x300" alt="Keindahan Desa 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black opacity-50 flex items-center justify-center">
                        <p class="text-white text-xl font-semibold">Pantai Desa</p>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/500x300" alt="Keindahan Desa 2" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black opacity-50 flex items-center justify-center">
                        <p class="text-white text-xl font-semibold">Bukit Hijau</p>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/500x300" alt="Keindahan Desa 3" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black opacity-50 flex items-center justify-center">
                        <p class="text-white text-xl font-semibold">Air Terjun Desa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer style="color: white; padding: 40px 20px; font-family: Arial, sans-serif;" class="bg-[#399918]">
    <div style="max-width: 1200px; margin: auto; display: flex; align-items: center;">
        <!-- Tambahkan Gambar di Sebelah Kiri -->
        <div style="margin-right: 20px;">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"
        class="h-14" alt="Flowbite Logo" style="width: 120px; height: auto; border-radius: 10px;">
        </div>
        <!-- Konten Teks -->
        <div style="flex: 1;">
            <h3 style="margin-bottom: 10px;">Pemerintah Kota Pemangkat</h3>
            <p style="margin: 5px 0;">Jl. [Nama Jalan], Pemangkat, Kalimantan Barat, Indonesia</p>
            <p style="margin: 5px 0;">Telepon: (0561) 123-456 | Email: info@pemangkat.go.id</p>
            <p style="margin: 5px 0;">Website Resmi: 
                <a href="https://www.pemangkat.go.id" style="color: #FFD700; text-decoration: none;">www.pemangkat.go.id</a>
            </p>
        </div>
        <!-- Ikon Media Sosial -->
        <div style="text-align: right;">
            <a href="https://facebook.com" target="_blank" style="margin: 0 10px;">
                <img src="facebook-icon.png" alt="Facebook" style="width: 30px; transition: transform 0.3s;">
            </a>
            <a href="https://twitter.com" target="_blank" style="margin: 0 10px;">
                <img src="twitter-icon.png" alt="Twitter" style="width: 30px; transition: transform 0.3s;">
            </a>
            <a href="https://instagram.com" target="_blank" style="margin: 0 10px;">
                <img src="instagram-icon.png" alt="Instagram" style="width: 30px; transition: transform 0.3s;">
            </a>
        </div>
    </div>
    <p style="text-align: center; margin-top: 30px; font-size: 14px; color: #E0E0E0;">&copy; 2024 Pemerintah Kota Pemangkat. Semua Hak Dilindungi Undang-undang.</p>
</footer>
    
</body>
</html>