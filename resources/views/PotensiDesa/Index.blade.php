<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profile Web')</title>
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
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
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
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
    <head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-cyan-100 to-green-50 text-gray-800 font-sans">
    <header class="bg-gradient-to-r class= bg-[#399918] text-white py-5 shadow-lg text-center mt-24">
        <h1 class="text-4xl font-semibold">Potensi Desa</h1>
    </header>

    <div class="container mx-auto my-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl text-green-500 mb-5 border-b-2 border-cyan-100 pb-2">Sumber Daya Alam</h2>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#127806;</i>
            <div>
                <h3 class="text-xl font-semibold">Pertanian</h3>
                <p class="text-gray-600">{{ $potensi['sumber_daya_alam']['pertanian'] }}</p>
            </div>
        </div>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#128336;</i>
            <div>
                <h3 class="text-xl font-semibold">Pertambangan</h3>
                <p class="text-gray-600">{{ $potensi['sumber_daya_alam']['pertambangan'] }}</p>
            </div>
        </div>

        <h2 class="text-2xl text-green-500 mb-5 border-b-2 border-cyan-100 pb-2">Budaya</h2>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#127797;</i>
            <div>
                <h3 class="text-xl font-semibold">Tradisi Lokal</h3>
                <p class="text-gray-600">{{ $potensi['budaya']['tradisi_lokal'] }}</p>
            </div>
        </div>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#128394;</i>
            <div>
                <h3 class="text-xl font-semibold">Kerajinan Tangan</h3>
                <p class="text-gray-600">{{ $potensi['budaya']['kerajinan_tangan'] }}</p>
            </div>
        </div>

        <h2 class="text-2xl text-green-500 mb-5 border-b-2 border-cyan-100 pb-2">Ekonomi</h2>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#128176;</i>
            <div>
                <h3 class="text-xl font-semibold">Industri Kecil</h3>
                <p class="text-gray-600">{{ $potensi['ekonomi']['industri_kecil'] }}</p>
            </div>
        </div>

        <h2 class="text-2xl text-green-500 mb-5 border-b-2 border-cyan-100 pb-2">Infrastruktur</h2>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#128663;</i>
            <div>
                <h3 class="text-xl font-semibold">Akses Transportasi</h3>
                <p class="text-gray-600">{{ $potensi['infrastruktur']['akses_transportasi'] }}</p>
            </div>
        </div>
        <div class="flex items-start mb-5">
            <i class="text-green-500 text-3xl mr-5">&#127891;</i>
            <div>
                <h3 class="text-xl font-semibold">Pendidikan dan Kesehatan</h3>
                <p class="text-gray-600">{{ $potensi['infrastruktur']['pendidikan_kesehatan'] }}</p>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 bg-green-50 text-gray-600 border-t-2 border-green-200">
        <p class="text-sm">© 2024 Potensi Desa. All rights reserved.</p>
    </footer>
</body>


    <footer style="color: white; padding: 40px 20px; font-family: Arial, sans-serif;" class="bg-[#399918]">
    <div style="max-width: 1200px; margin: auto; display: flex; align-items: center;">
        <!-- Tambahkan Gambar di Sebelah Kiri -->
        <div style="margin-right: 20px;">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"
        class="h-14" alt="Flowbite Logo" style="width: 120px; height: auto; border-radius: 10px;">
        </div>
        <!-- Konten Teks -->
        <div style="flex: 1; text-align: left;">
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
