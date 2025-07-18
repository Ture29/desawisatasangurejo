<header x-data="{ open: false }" class="bg-primary text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-3">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Desa Wisata" class="h-10"/>
        </a>

        <!-- Tombol hamburger -->
        <button @click="open = !open" class="md:hidden focus:outline-none">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Menu navigasi (desktop) -->
        <nav class="hidden md:flex space-x-6 text-[16px] font-semibold">
            <a href="/" class="hover:text-green-300 transition">Home</a>
            <a href="/tentangkami" class="hover:text-green-300 transition">Tentang Kami</a>
            <a href="/paketwisata" class="hover:text-green-300 transition">Paket Wisata</a>
            <a href="/galeri" class="hover:text-green-300 transition">Galeri</a>
            <a href="/kalender" class="hover:text-green-300 transition">Jadwal Kegiatan</a>
        </nav>
    </div>

    <!-- Menu navigasi (mobile) -->
    <nav x-show="open" x-transition class="md:hidden px-6 pb-4 space-y-2 text-[16px] font-semibold">
        <a href="/" class="block hover:text-green-300 transition">Home</a>
        <a href="/tentangkami" class="block hover:text-green-300 transition">Tentang Kami</a>
        <a href="/paketwisata" class="block hover:text-green-300 transition">Paket Wisata</a>
        <a href="/galeri" class="block hover:text-green-300 transition">Galeri</a>
        <a href="/kalender" class="block hover:text-green-300 transition">Jadwal Kegiatan</a>
    </nav>
</header>
