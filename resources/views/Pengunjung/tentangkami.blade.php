@extends('Pengunjung.Layouts.app')

@section('content')
{{-- banner --}}
<x-sections.banner />

{{-- Tentang Kami --}}
<section class="py-[60px] px-4 sm:px-6 md:px-10 lg:px-20 xl:px-40 bg-white">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-10 lg:px-20 xl:px-[40px]">
        <h2 class="text-2xl sm:text-3xl md:text-[32px] lg:text-[36px] xl:text-[40px] font-bold text-black mb-6">
            Tentang Kami
        </h2>
        <p class="text-base sm:text-lg md:text-xl lg:text-[22px] xl:text-[25px] text-black leading-relaxed text-justify">
            Desa wisata Sangurejo terletak di Sangurejo, Turi, Kab. Sleman, DI Yogyakarta. Sangurejo merupakan desa wisata
            yang memiliki pemandangan yang indah dengan alam yang sangat asri dan sangat cocok untuk kegiatan yang berbasis
            komunitas atau pelajar. Dibalik terbentuknya Desa Wisata Sangurejo terdapat sejarah yang melandasi. Awalnya masyarakat di Desa Sangurejo
            tidak memiliki angan-angan untuk menjadikan desa Sangurejo menjadi desa wisata. Dulu ini merupakan sebuah embung
            atau waduk yang diberi nama Embung Kaliaji. Pada tahun 2012, dikarenakan pengunjung banyak yang berdatangan dan perkembangan semakin maju, maka diolah
            menjadi suatu destinasi.

            <br><br>
            Kemudian dilaporkan ke Dinas Pariwisata untuk menjadikan destinasi wisata. Pada tahun
            2014, pengelolaan mulai belajar dari pendatang-pendatang selaku pengelihat wisata, dibuat struktur secara
            perlahan dan mendaftarkan diri ke Dinas Pariwisata sebagai desa wisata pada tahun 2016 dan dipadukan dengan Pok
            Darwis.

            <br><br>
            Desa Wisata Sangurejo ini awalnya merupakan satu keluarga dan kemudian keturunannya menjadi satu kampung. Desa
            wisata ini dibuat menggunakan sumbangan dari dana keistimewaan yang dikelola sehingga terciptanya Desa Wisata
            Sangurejo.
        </p>
    </div>
</section>

{{-- Aktivitas Carousel --}}
<x-sections.aktivitas-carousel />
@endsection