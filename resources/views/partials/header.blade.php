{{-- Navbar/Header --}}
<header class="navbar-fixed bg-apindo-blue shadow-lg border-b border-apindo-light">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <div class="text-xl font-bold text-white tracking-wider">
            ASOSIASI PENGUSAHA INDONESIA
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="#home" class="text-white hover:text-gray-200 transition duration-300 font-medium border-b-2 border-transparent hover:border-white pb-1">HOME</a>
            <a href="#schedule" class="text-white hover:text-gray-200 transition duration-300 font-medium border-b-2 border-transparent hover:border-white pb-1">SCHEDULE</a>
            <a href="#venue" class="text-white hover:text-gray-200 transition duration-300 font-medium border-b-2 border-transparent hover:border-white pb-1">VENUE</a>
            <a href="#pendaftaran" class="text-white hover:text-gray-200 transition duration-300 font-medium bg-apindo-dark px-3 py-1 rounded-md hover:bg-apindo-light">PENDAFTARAN</a>
        </nav>
        {{-- Tombol Hamburger untuk Mobile --}}
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="6" y2="6"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            </svg>
        </button>
    </div>
    {{-- Menu Mobile (Hidden by default) --}}
    <div id="mobile-menu" class="hidden md:hidden bg-apindo-dark pb-3">
        <a href="#home" class="block px-4 py-2 text-white hover:bg-apindo-light">HOME</a>
        <a href="#schedule" class="block px-4 py-2 text-white hover:bg-apindo-light">SCHEDULE</a>
        <a href="#venue" class="block px-4 py-2 text-white hover:bg-apindo-light">VENUE</a>
        <a href="#pendaftaran" class="block px-4 py-2 text-white hover:bg-apindo-light">PENDAFTARAN</a>
    </div>
</header>

