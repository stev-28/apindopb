{{-- Alert Sukses Global (Muncul di atas halaman) --}}
@if(session('success'))
<div id="success-alert" class="fixed top-0 left-0 right-0 z-[100] bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-4 shadow-2xl animate-slide-down">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center flex-1">
            <div class="flex-shrink-0 bg-white bg-opacity-20 rounded-full p-2 mr-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <div class="flex-1">
                <p class="font-bold text-lg">✓ Pendaftaran Berhasil!</p>
                <p class="text-sm opacity-95">{{ session('success') }}</p>
            </div>
        </div>
        <button onclick="document.getElementById('success-alert').style.display='none'" class="ml-4 text-white hover:text-green-200 transition-colors p-1 rounded-full hover:bg-white hover:bg-opacity-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
<style>
    @keyframes slide-down {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    .animate-slide-down {
        animation: slide-down 0.5s ease-out;
    }
</style>
@endif

{{-- Alert Error --}}
@if($errors->any())
<div id="error-alert" class="fixed top-0 left-0 right-0 z-[100] bg-red-500 text-white px-4 py-3 shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-medium">Terjadi kesalahan pada form pendaftaran.</span>
        </div>
        <button onclick="document.getElementById('error-alert').style.display='none'" class="text-white hover:text-red-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
@endif


