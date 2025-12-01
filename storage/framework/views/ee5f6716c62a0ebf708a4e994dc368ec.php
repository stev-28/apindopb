<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSPROV APINDO Papua Barat 2025</title>
    
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'apindo-blue': '#0A58A7',
                        'apindo-dark': '#074885',
                        'apindo-light': '#1E70B3',
                    }
                }
            }
        }
    </script>
    
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    
    <style>
        .hero-background {
            background-color: var(--apindo-blue);
            background-image: linear-gradient(rgba(10, 88, 167, 0.7), rgba(10, 88, 167, 0.5)), 
                              url('<?php echo e(asset('images/Backdroop.jpg')); ?>');
            background-size: cover;
            background-position: center;
        }
        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
        }
        section:first-of-type {
            padding-top: 80px;
        }
        .text-shadow-custom {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans scroll-smooth">

    
    <?php echo $__env->make('partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    
    <section id="home" class="hero-background text-white pt-24 pb-16 min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
            
            <div class="w-full md:w-2/3 space-y-4">
                <p class="text-lg sm:text-xl md:text-2xl font-light tracking-[0.3em] italic text-white/80">
                    ✦ Selamat Datang di ✦
                </p>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-none text-shadow-custom">
                    <span class="block">MUSPROV APINDO</span>
                    <span class="block">PAPUA BARAT 2025</span>
                </h1>
                <div class="p-4 sm:p-6 bg-black bg-opacity-30 backdrop-blur-sm rounded-xl max-w-lg shadow-2xl mt-6">
                    <p class="text-xl italic font-light">
                        "Menciptakan Iklim Investasi untuk Mewujudkan Ekonomi Papua Barat yang Produktif dan Berkelanjutan menuju Papua Barat yang Aman, Sejahtera, dan Bermartabat"
                    </p>
                </div>
                <div class="pt-4">
                    <a href="#pendaftaran" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-apindo-dark bg-yellow-400 hover:bg-yellow-500 shadow-xl transition duration-300 transform hover:scale-105">
                        DAFTAR SEKARANG
                    </a>
                </div>
            </div>

            
            <div class="w-full md:w-1/3 flex flex-col space-y-6 mt-12 md:mt-0 md:pl-6">
                
                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-md rounded-2xl shadow-2xl border-2 border-white/50 transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-white rounded-xl mb-4 shadow-inner p-2 overflow-hidden">
                            <img src="<?php echo e(asset('images/logokartuapindo.png')); ?>" alt="Logo APINDO" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold mb-1">APINDO PAPUA BARAT 2025</h3>
                        <p class="text-sm opacity-90">Musyawarah Provinsi APINDO</p>
                    </div>
                </div>

                
                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-md rounded-2xl shadow-2xl border-2 border-white/50 transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-white rounded-xl mb-4 shadow-inner p-2 overflow-hidden">
                            <img src="<?php echo e(asset('images/logokartu.png')); ?>" alt="Logo Papua Barat" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold mb-1">Bersama Membangun</h3>
                        <p class="text-sm opacity-90">Kemitraan dan Kolaborasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="schedule" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 border-b-4 border-apindo-blue inline-block pb-2">Jadwal Kegiatan</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 border-t-8 border-apindo-blue">
                    <h3 class="text-3xl font-bold text-apindo-blue mb-4 flex items-center">
                        <svg data-lucide="calendar-check" class="w-6 h-6 mr-3"></svg>
                        Hari 1: 11 Desember 2025
                    </h3>
                    <p class="text-xl font-semibold text-gray-700 mb-6">Lokasi: Billy Jaya Hotel</p>

                    <div class="space-y-3 max-h-[600px] overflow-y-auto pr-2">
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">08:30 - 09:00</p>
                            <p class="text-gray-700 text-sm">Registrasi Peserta Musprov + Snack Pagi</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:00 - 09:05</p>
                            <p class="text-gray-700 text-sm">Protokoler Pembukaan: Opening</p>
                            <p class="text-gray-500 text-xs mt-1">MC</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:05 - 09:10</p>
                            <p class="text-gray-700 text-sm">Doa Pembukaan: Musprov dan Pengukuhan DPP APINDO Papua Barat</p>
                            <p class="text-gray-500 text-xs mt-1">Pdt. Sadrak Simbiak, S.Th</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:10 - 09:15</p>
                            <p class="text-gray-700 text-sm">Menyanyikan Lagu Kebangsaan "Indonesia Raya"</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:15 - 09:20</p>
                            <p class="text-gray-700 text-sm">Menyanyikan Lagu Mars APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:20 - 09:30</p>
                            <p class="text-gray-700 text-sm">Laporan Ketua Panitia</p>
                            <p class="text-gray-500 text-xs mt-1">Isak S.K Mansawan, S.H.,M.H</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">09:30 - 09:40</p>
                            <p class="text-gray-700 text-sm">Sambutan: Ketua Caretaker DPP APINDO Papua Barat</p>
                            <p class="text-gray-500 text-xs mt-1">Sroyer Elisa</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">09:40 - 09:50</p>
                            <p class="text-gray-700 text-sm">Sambutan: Ketua Bidang Organisasi DPN APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Anthony Hilman</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">09:50 - 10:00</p>
                            <p class="text-gray-700 text-sm">Sambutan: Gubernur Papua Barat sekaligus membuka Kegiatan Musprov (ditandai pemukulan tifa)</p>
                            <p class="text-gray-500 text-xs mt-1">Pemerintah Prov. Papua Barat</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">10:00 - 10:30</p>
                            <p class="text-gray-700 text-sm">Closing + Foto Bersama + Coffee Break</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-green-50 rounded-lg shadow-sm border-l-4 border-green-500">
                            <p class="font-bold text-base text-apindo-dark">10:30 - 11:00</p>
                            <p class="text-gray-700 text-sm">Sidang Pleno 1: Pengesahan Kuorum, Tata Tertib & Jadwal Acara, Pembentukan Presidium Musprov</p>
                            <p class="text-gray-500 text-xs mt-1">Pimpinan Sidang Sementara</p>
                        </div>
                        
                        <div class="p-3 bg-green-50 rounded-lg shadow-sm border-l-4 border-green-500">
                            <p class="font-bold text-base text-apindo-dark">11:00 - 12:00</p>
                            <p class="text-gray-700 text-sm">Sidang Pleno 2: Pengesahan Pembentukan Komisi I Keorganisasian & II Program Kerja</p>
                            <p class="text-gray-500 text-xs mt-1">Pimpinan Sidang Tetap</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">12:00 - 13:00</p>
                            <p class="text-gray-700 text-sm">Ishoma/Makan Siang</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-green-50 rounded-lg shadow-sm border-l-4 border-green-500">
                            <p class="font-bold text-base text-apindo-dark">13:00 - 14:30</p>
                            <p class="text-gray-700 text-sm">Sidang Komisi (Lanjutan Pleno 2): Komisi I Keorganisasian & Komisi II Program Kerja, Pengesahan Hasil Sidang Komisi</p>
                            <p class="text-gray-500 text-xs mt-1">Ketua dan Sekretaris Komisi I & II, Pimpinan Sidang Tetap</p>
                        </div>
                        
                        <div class="p-3 bg-green-50 rounded-lg shadow-sm border-l-4 border-green-500">
                            <p class="font-bold text-base text-apindo-dark">14:30 - 16:00</p>
                            <p class="text-gray-700 text-sm">Sidang Pleno 3: Pengesahan Kandidat, Pemilihan & Pengesahan Hasil Pemilihan Ketua DPP APINDO Papua Barat 2025-2030, Pemilihan Ketua Dewan Pertimbangan, Pengesahan Tim Formatur</p>
                            <p class="text-gray-500 text-xs mt-1">Pimpinan Sidang Tetap</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">16:00 - 16:30</p>
                            <p class="text-gray-700 text-sm">Penutup (Doa Penutup Musprov) + Snack Sore</p>
                            <p class="text-gray-500 text-xs mt-1">Ustad Rangga, Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">16:30 - 17:00</p>
                            <p class="text-gray-700 text-sm">Gladi Bersih Persiapan Pengukuhan DPP APINDO Papua Barat 2025-2030</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                    </div>
                </div>

                
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 border-t-8 border-apindo-blue">
                    <h3 class="text-3xl font-bold text-apindo-blue mb-4 flex items-center">
                        <svg data-lucide="calendar-check" class="w-6 h-6 mr-3"></svg>
                        Hari 2: 12 Desember 2025
                    </h3>
                    <p class="text-xl font-semibold text-gray-700 mb-6">Lokasi: Mansinam Beach Hotel</p>
                    
                    <div class="space-y-3 max-h-[600px] overflow-y-auto pr-2">
                        <div class="p-3 bg-purple-50 rounded-lg shadow-sm border-l-4 border-purple-500">
                            <p class="font-bold text-base text-apindo-dark">07:00 - 08:35</p>
                            <p class="text-gray-700 text-sm">Penjemputan Ketua Umum DPN APINDO, Ibu Shinta Widjaja Kamdani di Bandara Rendani Manokwari (Tarian Adat Papua & Penyerahan Noken Papua)</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia, Pengurus DPP APINDO Papua Barat, Ketua Panitia, Tim Tari</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">08:35 - 09:00</p>
                            <p class="text-gray-700 text-sm">Perjalanan dari Bandara ke Mansinam Beach Hotel Manokwari</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">09:00 - 12:00</p>
                            <p class="text-gray-700 text-sm">Istirahat Ketua Umum DPN APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">12:00 - 13:00</p>
                            <p class="text-gray-700 text-sm">Makan Siang</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-green-50 rounded-lg shadow-sm border-l-4 border-green-500">
                            <p class="font-bold text-base text-apindo-dark">13:00 - 14:30</p>
                            <p class="text-gray-700 text-sm">Dialog Ekonomi</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">14:30 - 15:00</p>
                            <p class="text-gray-700 text-sm">Persiapan Pengukuhan</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">15:00 - 15:05</p>
                            <p class="text-gray-700 text-sm">Protokoler Pembukaan</p>
                            <p class="text-gray-500 text-xs mt-1">MC</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">15:05 - 15:10</p>
                            <p class="text-gray-700 text-sm">Doa Pembukaan</p>
                            <p class="text-gray-500 text-xs mt-1">Pdt. A. Mandowen, S.Th</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">15:10 - 15:15</p>
                            <p class="text-gray-700 text-sm">Menyanyikan Lagu Kebangsaan "Indonesia Raya"</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">15:15 - 15:20</p>
                            <p class="text-gray-700 text-sm">Menyanyikan Lagu Mars APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">15:20 - 15:30</p>
                            <p class="text-gray-700 text-sm">Laporan Ketua Panitia</p>
                            <p class="text-gray-500 text-xs mt-1">Isak S.K Mansawan, S.H., M.H</p>
                        </div>
                        
                        <div class="p-3 bg-orange-50 rounded-lg shadow-sm border-l-4 border-orange-500">
                            <p class="font-bold text-base text-apindo-dark">15:30 - 16:00</p>
                            <p class="text-gray-700 text-sm">Proses Pengukuhan DPP APINDO Papua Barat 2025-2030: Pembacaan SK DPN APINDO, Pengukuhan (Sumpah & Pelantikan), Penyerahan Pataka, Penandatanganan Berita Acara</p>
                            <p class="text-gray-500 text-xs mt-1">Ketua Umum DPN APINDO, Ibu Shinta Widjaja Kamdani</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">16:00 - 16:10</p>
                            <p class="text-gray-700 text-sm">Sambutan: Ketua DPP APINDO Papua Barat 2025-2030</p>
                            <p class="text-gray-500 text-xs mt-1">-</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">16:10 - 16:25</p>
                            <p class="text-gray-700 text-sm">Sambutan: Ketua Umum DPN APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Shinta Widjaja Kamdani</p>
                        </div>
                        
                        <div class="p-3 bg-yellow-50 rounded-lg shadow-sm border-l-4 border-yellow-400">
                            <p class="font-bold text-base text-apindo-dark">16:25 - 16:35</p>
                            <p class="text-gray-700 text-sm">Sambutan: Gubernur Papua Barat</p>
                            <p class="text-gray-500 text-xs mt-1">Drs. Dominggus Mandacan, M.Si</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">16:35 - 16:40</p>
                            <p class="text-gray-700 text-sm">Menyanyikan Lagu Tanah Papua</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">16:40 - 16:45</p>
                            <p class="text-gray-700 text-sm">Doa Penutup</p>
                            <p class="text-gray-500 text-xs mt-1">Pdt. Sadrak Simbiak, S.Th</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">16:45 - 17:00</p>
                            <p class="text-gray-700 text-sm">Penutup dan Foto Bersama</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-blue-50 rounded-lg shadow-sm border-l-4 border-apindo-blue">
                            <p class="font-bold text-base text-apindo-dark">17:00 - 19:00</p>
                            <p class="text-gray-700 text-sm">Istirahat Ketua Umum DPN APINDO</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                        
                        <div class="p-3 bg-purple-50 rounded-lg shadow-sm border-l-4 border-purple-500">
                            <p class="font-bold text-base text-apindo-dark">19:00 - Selesai</p>
                            <p class="text-gray-700 text-sm">Dinner dengan Pejabat Daerah</p>
                            <p class="text-gray-500 text-xs mt-1">Panitia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="venue" class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 border-b-4 border-apindo-blue inline-block pb-2">Lokasi Pelaksanaan</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="bg-gray-50 p-6 rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                    <div class="h-64 mb-4 rounded-xl overflow-hidden">
                        <img src="<?php echo e(asset('images/BJH.png')); ?>" alt="Billy Jaya Hotel" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-3xl font-bold text-apindo-blue mb-2">Billy Jaya Hotel</h3>
                    <p class="text-gray-600 mb-4">Jl. Merdeka, Padarni, Kec. Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312 (Hari ke-1, 11 Desember 2025)</p>
                    <a href="https://maps.app.goo.gl/8g4qY6PzcvVjC4aX8" target="_blank" class="inline-flex items-center text-white bg-apindo-blue hover:bg-apindo-dark px-4 py-2 rounded-lg font-medium transition duration-300">
                        <svg data-lucide="map-pin" class="w-4 h-4 mr-2"></svg>
                        Lihat di Google Maps
                    </a>
                    <p class="mt-4 text-sm text-gray-500">Venue utama untuk sesi pembukaan dan sidang.</p>
                </div>

                
                <div class="bg-gray-50 p-6 rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                    <div class="h-64 mb-4 rounded-xl overflow-hidden">
                        <img src="<?php echo e(asset('images/MBH.png')); ?>" alt="Mansinam Beach Hotel" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-3xl font-bold text-apindo-blue mb-2">Mansinam Beach Hotel</h3>
                    <p class="text-gray-600 mb-4">Jl. Pasir Putih No.7, Pasir Putih, Kec. Manokwari Tim., Kabupaten Manokwari, Papua Bar. 98313 (Hari ke-2, 12 Desember 2025)</p>
                    <a href="https://maps.app.goo.gl/K8vMUyDTvei42kmA8" target="_blank" class="inline-flex items-center text-white bg-apindo-blue hover:bg-apindo-dark px-4 py-2 rounded-lg font-medium transition duration-300">
                        <svg data-lucide="map-pin" class="w-4 h-4 mr-2"></svg>
                        Lihat di Google Maps
                    </a>
                    <p class="mt-4 text-sm text-gray-500">Venue untuk pengukuhan pengusus DPP dan penutupan MUSPROV APINDO 2025.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section id="pendaftaran" class="py-16 bg-apindo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
            <h2 class="text-4xl font-bold text-center mb-4 border-b-4 border-yellow-400 inline-block pb-2">Formulir Pendaftaran</h2>
            <p class="text-center mb-4 text-xl font-light opacity-90">Harap isi data diri Anda untuk pendaftaran delegasi MUSPROV APINDO 2025.</p>
            <div class="text-center mb-6">
                <p class="text-yellow-300 text-sm font-medium">
                    <svg data-lucide="phone" class="w-4 h-4 inline mr-1"></svg>
                    Narahubung: <a href="https://wa.me/6285157110525" target="_blank" class="underline hover:text-yellow-200">085157110525</a> (Sekretariat Panitia)
                </p>
            </div>

            
            <?php if(session('success')): ?>
            <div class="bg-green-50 border-2 border-green-400 text-green-800 px-6 py-4 rounded-xl mb-6 shadow-lg animate-fade-in" role="alert">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 flex-1">
                        <h3 class="text-lg font-bold text-green-800 mb-1">✓ Formulir Pendaftaran Berhasil Dikirim!</h3>
                        <p class="text-green-700"><?php echo e(session('success')); ?></p>
                        <p class="text-sm text-green-600 mt-2">Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if($errors->any()): ?>
            <div class="bg-red-100 border-2 border-red-400 text-red-700 px-6 py-4 rounded-xl mb-6 shadow-lg" role="alert">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 flex-1">
                        <h3 class="text-lg font-bold text-red-800 mb-2">Terjadi Kesalahan</h3>
                        <ul class="list-disc list-inside space-y-1">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <form action="<?php echo e(route('pendaftaran.store')); ?>" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-2xl shadow-2xl space-y-6">
                <?php echo csrf_field(); ?>
                
                
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" required value="<?php echo e(old('nama')); ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900 transition-colors"
                           placeholder="Masukkan Nama Lengkap Anda">
                </div>
                
                
                <div>
                    <label for="kabupaten" class="block text-sm font-medium text-gray-700 mb-1">
                        Asal Kabupaten <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="kabupaten" name="kabupaten" required value="<?php echo e(old('kabupaten')); ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900 transition-colors"
                           placeholder="Masukkan Asal Kabupaten">
                </div>

                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" required value="<?php echo e(old('email')); ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900 transition-colors"
                           placeholder="alamat@email.com">
                </div>

                
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">
                        Nomor Telepon (WhatsApp) <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="telepon" name="telepon" required value="<?php echo e(old('telepon')); ?>"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900 transition-colors"
                           placeholder="Contoh: 08123456789">
                </div>

                
                <div>
                    <label for="surat_mandat" class="block text-sm font-medium text-gray-700 mb-1">
                        Lampirkan Surat Mandat dan/atau Surat Keputusan Caretaker DPK
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="file" id="surat_mandat" name="surat_mandat" accept=".pdf,.jpeg,.jpg" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-apindo-blue file:text-white hover:file:bg-apindo-dark transition-colors">
                    <p class="mt-1 text-xs text-gray-500">Format: PDF atau JPEG. Ukuran maksimal: 2 MB <span class="text-red-500">(Wajib)</span></p>
                    <?php $__errorArgs = ['surat_mandat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-apindo-dark bg-yellow-400 hover:bg-yellow-500 transition duration-300 transform hover:scale-[1.01]">
                    Kirim Pendaftaran
                </button>
            </form>
        </div>
    </section>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\Users\pusda\Documents\StevieWeb\APINDOPB\resources\views/landing.blade.php ENDPATH**/ ?>