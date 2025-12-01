<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Pendaftaran MUSPROV APINDO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Data Pendaftaran</h1>
                        <p class="text-gray-600 mt-1">MUSPROV APINDO Papua Barat 2025</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-green-100 text-green-800 px-4 py-2 rounded-lg font-semibold">
                            Total: {{ $registrations->count() }} Pendaftar
                        </div>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                <svg data-lucide="log-out" class="w-4 h-4 inline mr-2"></svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Tabel Data --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama Lengkap</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Asal Kabupaten</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nomor Telepon</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">File Lampiran</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tanggal Daftar</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($registrations as $index => $registration)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $registration->nama }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-700">{{ $registration->kabupaten }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-700">{{ $registration->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-700">{{ $registration->telepon }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($registration->surat_mandat)
                                        <a href="{{ Storage::url($registration->surat_mandat) }}" target="_blank" 
                                           class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 rounded-lg hover:bg-green-200 transition text-sm">
                                            <svg data-lucide="file-text" class="w-4 h-4 mr-1"></svg>
                                            Lihat File
                                        </a>
                                    @else
                                        <span class="text-gray-400 text-sm">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $registration->created_at->format('d/m/Y H:i') }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex items-center space-x-3">
                                        <a href="{{ route('admin.show', $registration->id) }}" 
                                           class="text-blue-600 hover:text-blue-900 font-medium">
                                            Detail
                                        </a>
                                        <form action="{{ route('admin.destroy', $registration->id) }}" 
                                              method="POST" 
                                              class="inline"
                                              onsubmit="return confirmDelete('{{ $registration->nama }}')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-900 font-medium">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="px-6 py-8 text-center text-gray-500">
                                    <svg data-lucide="inbox" class="w-12 h-12 mx-auto mb-2 text-gray-400"></svg>
                                    <p>Belum ada data pendaftaran</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Notifikasi Sukses --}}
            @if(session('success'))
            <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg" role="alert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
            @endif

            {{-- Export Button --}}
            @if($registrations->count() > 0)
            <div class="mt-6 flex justify-end">
                <button onclick="exportToCSV()" 
                        class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-medium">
                    <svg data-lucide="download" class="w-5 h-5 inline mr-2"></svg>
                    Export ke CSV
                </button>
            </div>
            @endif
        </div>
    </div>

    <script>
        lucide.createIcons();

        function confirmDelete(nama) {
            return confirm(`Apakah Anda yakin ingin menghapus data pendaftaran:\n\n${nama}?\n\nData yang dihapus tidak dapat dikembalikan!`);
        }

        function exportToCSV() {
            const data = @json($registrations);
            let csv = 'No,Nama Lengkap,Asal Kabupaten,Email,Nomor Telepon,File Lampiran,Tanggal Daftar\n';
            
            data.forEach((item, index) => {
                const row = [
                    index + 1,
                    `"${item.nama}"`,
                    `"${item.kabupaten}"`,
                    `"${item.email}"`,
                    `"${item.telepon}"`,
                    item.surat_mandat ? `"${item.surat_mandat}"` : '-',
                    `"${new Date(item.created_at).toLocaleString('id-ID')}"`
                ];
                csv += row.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);
            link.setAttribute('href', url);
            link.setAttribute('download', `pendaftaran_${new Date().toISOString().split('T')[0]}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>
</html>

