<section class="relative">
    <img src="{{ asset('img/baner.jpg') }}" 
         alt="Desa Wisata Hijau" 
         class="w-full h-[400px] object-cover" />

    <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4"
         style="background-color: rgba(26, 71, 49, 0.4);">
        <h1 class="text-white text-[40px] md:text-3xl font-extrabold drop-shadow-lg">
            Selamat Datang di Desa Wisata Sangurejo
        </h1>
        <p class="text-white mt-3 max-w-xl text-[25px] md:text-xl">
            Temukan keindahan alami dan budaya yang asri di desa kami yang hijau dan penuh fasilitas.
        </p>
        <a href="{{route('paketwisata')}}" class="mt-6 inline-block bg-button hover:bg-hover-button text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition">
            Lihat Paket Wisata
        </a>
    </div>
</section>
