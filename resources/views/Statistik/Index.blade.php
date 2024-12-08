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
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Penduduk Desa</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100; rounded-lg bg-[#399918] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#399918] border-[#399918]">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <header class="bg-blue-600 text-white py-4 shadow-md text-center mt-24">
        <h1 class="text-2xl font-semibold">Statistik Penduduk Desa</h1>
    </header>

    <div class="container mx-auto my-8 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-blue-600 mb-4">Jumlah Penduduk Berdasarkan Kategori</h2>
        <canvas id="populationChart"></canvas>

        <div class="flex flex-wrap gap-8 justify-between mt-8">
            <div class="w-full sm:w-1/2 lg:w-1/3 text-center">
                <h2 class="text-lg font-semibold text-blue-600 mb-3">Jumlah Penduduk Berdasarkan Agama</h2>
                <canvas id="religionChart"></canvas>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 text-center">
                <h2 class="text-lg font-semibold text-blue-600 mb-3">Status Perkawinan</h2>
                <canvas id="maritalChart"></canvas>
            </div>
        </div>
    </div>

    <div class="footer text-center py-4 text-sm text-gray-600 mt-8">
        &copy; 2024 Statistik Profil Desa. Dibangun dengan <a href="https://laravel.com" class="text-blue-600 hover:underline">Laravel</a>.
    </div>

    <script>
        // Data dan Grafik
        const populationData = {
            labels: ['Laki-laki', 'Perempuan', 'Total'],
            datasets: [{
                label: 'Jumlah Penduduk',
                data: [1200, 1300, 2500],
                backgroundColor: ['rgba(54, 162, 235, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(75, 192, 192, 0.5)'],
                borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)'],
                borderWidth: 1
            }]
        };

        new Chart(document.getElementById('populationChart'), {
            type: 'bar',
            data: populationData,
            options: {
                responsive: true,
                plugins: {
                    title: { display: true, text: 'Jumlah Penduduk Desa' }
                },
                scales: { y: { beginAtZero: true } }
            }
        });

        const religionData = {
            labels: ['Islam', 'Kristen', 'Hindu', 'Budha', 'Lainnya'],
            datasets: [{
                label: 'Jumlah Penduduk',
                data: [2000, 300, 100, 50, 20],
                backgroundColor: ['rgba(75, 192, 192, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(153, 102, 255, 0.5)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 206, 86, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)', 'rgba(153, 102, 255, 1)'],
                borderWidth: 1
            }]
        };

        new Chart(document.getElementById('religionChart'), {
            type: 'pie',
            data: religionData,
            options: {
                responsive: true,
                plugins: {
                    title: { display: true, text: 'Jumlah Penduduk Berdasarkan Agama' }
                }
            }
        });

        const maritalData = {
            labels: ['Kawin', 'Belum Kawin'],
            datasets: [{
                label: 'Status Perkawinan',
                data: [1500, 1000],
                backgroundColor: ['rgba(54, 162, 235, 0.5)', 'rgba(255, 99, 132, 0.5)'],
                borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'],
                borderWidth: 1
            }]
        };

        new Chart(document.getElementById('maritalChart'), {
            type: 'doughnut',
            data: maritalData,
            options: {
                responsive: true,
                plugins: {
                    title: { display: true, text: 'Status Perkawinan Penduduk' }
                }
            }
        });
    </script>
</body>
    

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
