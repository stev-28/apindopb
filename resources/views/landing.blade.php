<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSPROV APINDO Papua Barat 2025</title>
    
    {{-- Load Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Konfigurasi Tailwind --}}
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
    
    {{-- Google Fonts - Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>
    
    {{-- Custom Styles --}}
    <style>
        .hero-background {
            background-color: var(--apindo-blue);
            background-image: linear-gradient(rgba(10, 88, 167, 0.7), rgba(10, 88, 167, 0.5)), 
                              url('{{ asset('images/Backdroop.jpg') }}');
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
    </style>
</head>
<body class="bg-gray-50 font-sans scroll-smooth">

    {{-- Alert Notifications --}}
    @include('partials.alert')

    {{-- Header/Navbar --}}
    @include('partials.header')

    {{-- ==================== SECTIONS ==================== --}}

    {{-- 1. HOME Section --}}
    <section id="home" class="hero-background text-white pt-24 pb-16 min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
            {{-- Konten Utama Kiri --}}
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

            {{-- Kartu Info Kanan --}}
            <div class="w-full md:w-1/3 flex flex-col space-y-6 mt-12 md:mt-0 md:pl-6">
                {{-- Kartu 1: APINDO Papua Barat 2025 --}}
                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-md rounded-2xl shadow-2xl border-2 border-white/50 transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-white rounded-xl mb-4 shadow-inner p-2 overflow-hidden">
                            <img src="{{ asset('images/logokartuapindo.png') }}" alt="Logo APINDO" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold mb-1">APINDO PAPUA BARAT 2025</h3>
                        <p class="text-sm opacity-90">Musyawarah Provinsi APINDO</p>
                    </div>
                </div>

                {{-- Kartu 2: Bersama Membangun Papua Barat --}}
                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-md rounded-2xl shadow-2xl border-2 border-white/50 transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-white rounded-xl mb-4 shadow-inner p-2 overflow-hidden">
                            <img src="{{ asset('images/logokartu.png') }}" alt="Logo Papua Barat" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold mb-1">Bersama Membangun</h3>
                        <p class="text-sm opacity-90">Kemitraan dan Kolaborasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. SCHEDULE Section --}}
    <section id="schedule" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 border-b-4 border-apindo-blue inline-block pb-2">Jadwal Kegiatan</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                {{-- Hari 1: Billy Jaya Hotel --}}
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 border-t-8 border-apindo-blue">
                    <h3 class="text-3xl font-bold text-apindo-blue mb-4 flex items-center">
                        <svg data-lucide="calendar-check" class="w-6 h-6 mr-3"></svg>
                        Hari 1: 11 Desember 2025
                    </h3>
                    <p class="text-xl font-semibold text-gray-700 mb-6">Lokasi: Billy Jaya Hotel</p>

                    <ol class="space-y-4">
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">08:00 - 10:00</p>
                            <p class="text-gray-600">Registrasi Peserta & Penyambutan Tamu</p>
                        </li>
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">10:00 - 12:00</p>
                            <p class="text-gray-600">Upacara Pembukaan MUSPROV APINDO</p>
                        </li>
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">13:00 - 16:00</p>
                            <p class="text-gray-600">Sidang Pleno I: Laporan Pertanggungjawaban Pengurus Periode Sebelumnya</p>
                        </li>
                    </ol>
                </div>

                {{-- Hari 2: Mansinam Beach Hotel --}}
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 border-t-8 border-apindo-blue">
                    <h3 class="text-3xl font-bold text-apindo-blue mb-4 flex items-center">
                        <svg data-lucide="calendar-check" class="w-6 h-6 mr-3"></svg>
                        Hari 2: 12 Desember 2025
                    </h3>
                    <p class="text-xl font-semibold text-gray-700 mb-6">Lokasi: Mansinam Beach Hotel</p>
                    
                    <ol class="space-y-4">
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">09:00 - 12:00</p>
                            <p class="text-gray-600">Sidang Pleno II: Pemilihan Ketua APINDO Papua Barat 2025-2030</p>
                        </li>
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">13:00 - 15:00</p>
                            <p class="text-gray-600">Perumusan Rekomendasi Program Kerja</p>
                        </li>
                        <li class="p-4 bg-blue-50 rounded-lg shadow-sm">
                            <p class="font-bold text-lg text-apindo-dark">18:00 - Selesai</p>
                            <p class="text-gray-600">Acara Penutupan & Gala Dinner di tepi pantai</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. VENUE Section --}}
    <section id="venue" class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800 border-b-4 border-apindo-blue inline-block pb-2">Lokasi Pelaksanaan</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- Venue 1: Billy Jaya Hotel --}}
                <div class="bg-gray-50 p-6 rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                    <div class="h-64 mb-4 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/BJH.png') }}" alt="Billy Jaya Hotel" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-3xl font-bold text-apindo-blue mb-2">Billy Jaya Hotel</h3>
                    <p class="text-gray-600 mb-4">Jl. Merdeka, Padarni, Kec. Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312 (Hari ke-1, 11 Desember 2025)</p>
                    <a href="https://maps.app.goo.gl/8g4qY6PzcvVjC4aX8" target="_blank" class="inline-flex items-center text-white bg-apindo-blue hover:bg-apindo-dark px-4 py-2 rounded-lg font-medium transition duration-300">
                        <svg data-lucide="map-pin" class="w-4 h-4 mr-2"></svg>
                        Lihat di Google Maps
                    </a>
                    <p class="mt-4 text-sm text-gray-500">Venue utama untuk sesi pembukaan dan sidang.</p>
                </div>

                {{-- Venue 2: Mansinam Beach Hotel --}}
                <div class="bg-gray-50 p-6 rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                    <div class="h-64 mb-4 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/MBH.png') }}" alt="Mansinam Beach Hotel" class="w-full h-full object-cover hover:scale-105 transition duration-500">
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

    {{-- 4. PENDAFTARAN Section --}}
    <section id="pendaftaran" class="py-16 bg-apindo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
            <h2 class="text-4xl font-bold text-center mb-4 border-b-4 border-yellow-400 inline-block pb-2">Formulir Pendaftaran</h2>
            <p class="text-center mb-10 text-xl font-light opacity-90">Harap isi data diri Anda untuk pendaftaran delegasi MUSPROV APINDO 2025.</p>

            {{-- Notifikasi Error di Form --}}
            @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6" role="alert">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Form Pendaftaran --}}
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="bg-white p-8 rounded-2xl shadow-2xl space-y-6">
                @csrf
                
                {{-- Nama Lengkap --}}
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required value="{{ old('nama') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900"
                           placeholder="Masukkan Nama Lengkap Anda">
                </div>
                
                {{-- Asal Kabupaten --}}
                <div>
                    <label for="kabupaten" class="block text-sm font-medium text-gray-700 mb-1">Asal Kabupaten</label>
                    <input type="text" id="kabupaten" name="kabupaten" required value="{{ old('kabupaten') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900"
                           placeholder="Masukkan Asal Kabupaten">
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900"
                           placeholder="alamat@email.com">
                </div>

                {{-- Nomor Telepon --}}
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon (WhatsApp)</label>
                    <input type="tel" id="telepon" name="telepon" required value="{{ old('telepon') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-apindo-blue focus:border-apindo-blue text-gray-900"
                           placeholder="Contoh: 08123456789">
                </div>

                {{-- Tombol Submit --}}
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-apindo-dark bg-yellow-400 hover:bg-yellow-500 transition duration-300 transform hover:scale-[1.01]">
                    Kirim Pendaftaran
                </button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    @include('partials.scripts')

</body>
</html>
