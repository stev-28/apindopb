<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran - {{ $registration->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            {{-- Header --}}
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Detail Pendaftaran</h1>
                        <p class="text-gray-600 mt-1">ID: #{{ $registration->id }}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('admin.index') }}" 
                           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            <svg data-lucide="arrow-left" class="w-4 h-4 inline mr-2"></svg>
                            Kembali
                        </a>
                        <form action="{{ route('admin.destroy', $registration->id) }}" 
                              method="POST" 
                              class="inline"
                              onsubmit="return confirmDelete('{{ $registration->nama }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                <svg data-lucide="trash-2" class="w-4 h-4 inline mr-2"></svg>
                                Hapus
                            </button>
                        </form>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                                <svg data-lucide="log-out" class="w-4 h-4 inline mr-2"></svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Notifikasi Sukses --}}
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6" role="alert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
            @endif

            {{-- Detail Data --}}
            <div class="bg-white rounded-lg shadow-md p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Nama Lengkap</label>
                        <p class="text-lg font-semibold text-gray-900">{{ $registration->nama }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Asal Kabupaten</label>
                        <p class="text-lg font-semibold text-gray-900">{{ $registration->kabupaten }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                        <p class="text-lg text-gray-900">
                            <a href="mailto:{{ $registration->email }}" class="text-blue-600 hover:underline">
                                {{ $registration->email }}
                            </a>
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Nomor Telepon</label>
                        <p class="text-lg text-gray-900">
                            <a href="https://wa.me/62{{ substr($registration->telepon, 1) }}" target="_blank" 
                               class="text-green-600 hover:underline">
                                {{ $registration->telepon }}
                            </a>
                        </p>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-500 mb-1">File Lampiran</label>
                        @if($registration->surat_mandat)
                            <div class="mt-2">
                                <a href="{{ Storage::url($registration->surat_mandat) }}" target="_blank" 
                                   class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-lg hover:bg-green-200 transition">
                                    <svg data-lucide="file-text" class="w-5 h-5 mr-2"></svg>
                                    Download File Lampiran
                                </a>
                                <p class="text-sm text-gray-500 mt-2">{{ $registration->surat_mandat }}</p>
                            </div>
                        @else
                            <p class="text-gray-400">Tidak ada file lampiran</p>
                        @endif
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Daftar</label>
                        <p class="text-lg text-gray-900">
                            {{ $registration->created_at->format('d F Y, H:i:s') }}
                        </p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Terakhir Diupdate</label>
                        <p class="text-lg text-gray-900">
                            {{ $registration->updated_at->format('d F Y, H:i:s') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        function confirmDelete(nama) {
            return confirm(`Apakah Anda yakin ingin menghapus data pendaftaran:\n\n${nama}?\n\nData yang dihapus tidak dapat dikembalikan!`);
        }
    </script>
</body>
</html>

