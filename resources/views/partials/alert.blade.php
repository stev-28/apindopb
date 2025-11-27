{{-- Alert Sukses Global (Muncul di atas halaman) --}}
@if(session('success'))
<div id="success-alert" class="fixed top-0 left-0 right-0 z-[100] bg-green-500 text-white px-4 py-3 shadow-lg transform transition-transform duration-500">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        <button onclick="document.getElementById('success-alert').style.display='none'" class="text-white hover:text-green-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
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

