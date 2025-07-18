<aside class="w-64 h-screen bg-teal-600 text-white flex flex-col" x-data="{ wisataOpen: {{ request()->is('admin/datawisata*') ? 'true' : 'false' }} }">
    <div class="p-4 font-bold text-lg border-b border-white flex items-center space-x-2">
        <img src="/img/logo.png" alt="Logo" class="w-8 h-8 object-contain">
        <span>Desa Wisata Sangurejo</span>
    </div>

    <nav class="flex-1 mt-4 px-2 space-y-1">

        {{-- Dashboard --}}
        <a href="/admin/dashboard"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/dashboard') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-home mr-3 w-5"></i> Dashboard
        </a>

        {{-- Dropdown: Data Wisata --}}
        <button
            @click="wisataOpen = !wisataOpen"
            class="w-full flex items-center justify-between px-4 py-2 rounded hover:bg-teal-500 focus:outline-none {{ request()->is('admin/datawisata*') ? 'bg-teal-700' : '' }}">
            <span class="flex items-center">
                <i class="fas fa-database mr-3 w-5"></i> Data Wisata
            </span>
            <i :class="wisataOpen ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-sm transition-all duration-200"></i>
        </button>

        <div
            x-show="wisataOpen"
            x-transition
            class="ml-8 mt-1 flex flex-col space-y-1 text-sm"
        >
            <a href="/admin/datawisata/tentang-kami"
               class="block px-2 py-1 rounded hover:bg-teal-500 {{ request()->is('admin/datawisata/tentang-kami') ? 'bg-teal-700' : '' }}">
                Tentang Kami
            </a>
            <a href="/admin/datawisata/carousel"
               class="block px-2 py-1 rounded hover:bg-teal-500 {{ request()->is('admin/datawisata/carousel') ? 'bg-teal-700' : '' }}">
                Carousel
            </a>
            <a href="/admin/datawisata/event"
               class="block px-2 py-1 rounded hover:bg-teal-500 {{ request()->is('admin/datawisata/event') ? 'bg-teal-700' : '' }}">
                Event
            </a>
        </div>

        {{-- Menu lainnya --}}
        <a href="/admin/paketdestinasi"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/paket-destinasi') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-map-marked-alt mr-3 w-5"></i> Paket Destinasi
        </a>
        <a href="/admin/galeri"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/galeri') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-images mr-3 w-5"></i> Galeri
        </a>
        <a href="/admin/kalender"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/kalender') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-calendar-alt mr-3 w-5"></i> Kalender
        </a>
        <a href="/admin/kunjungan"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/kunjungan') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-walking mr-3 w-5"></i> Kunjungan
        </a>
        <a href="/admin/booking"
           class="flex items-center px-4 py-2 rounded hover:bg-teal-500 {{ request()->is('admin/booking') ? 'bg-teal-700' : '' }}">
            <i class="fas fa-book mr-3 w-5"></i> Booking
        </a>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</aside>
