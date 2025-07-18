@extends('Pengunjung.Layouts.app')

@section('content')
{{-- banner --}}
<x-sections.banner />

{{-- Paket Wisata --}}
<section class="py-[60px] px-4 sm:px-6 md:px-10 lg:px-[100px] xl:px-[170px]">
    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-bold text-center text-black mb-[40px] sm:mb-[60px]">
        Paket Wisata
    </h2>

    @php
    $pakets = [
    ['title' => 'PAKET 1', 'image' => 'makrab.png', 'desc' => 'Makrab', 'route' => 'detailpaketmakrab'],
    ['title' => 'PAKET 2', 'image' => 'Sikrab.jpg', 'desc' => 'Sikrab', 'route' => 'detailpaketsikrab'],
    ['title' => 'PAKET 3', 'image' => 'pernikahan.webp', 'desc' => 'Pernikahan', 'route' => 'detailpaketpernikahan'],
    ['title' => 'PAKET 4', 'image' => 'camping.png', 'desc' => 'Camping', 'route' => 'detailpaketcamping'],
    ['title' => 'PAKET 5', 'image' => 'sikrab.jpg', 'desc' => 'Pramuka', 'route' => 'detailpaketpramuka'],
    ['title' => 'PAKET 6', 'image' => 'homestay.jpg', 'desc' => 'Homestay', 'route' => 'detailpakethomestay'],
    ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        @foreach($pakets as $paket)
        <div class="bg-white border border-black rounded-[10px] p-4 flex flex-col items-center justify-between shadow-md">
            <div class="text-lg sm:text-xl md:text-[24px] font-bold text-center text-black mb-4">{{ $paket['title'] }}</div>
            <img src="{{ asset('img/' . $paket['image']) }}"
                class="w-full sm:w-[223px] h-[176px] object-cover rounded-[10px] mb-4" />
            <p class="text-sm sm:text-[16px] font-semibold text-black text-center mb-4">{{ $paket['desc'] }}</p>
            <a href="{{ route($paket['route']) }}"
                class="bg-button text-white text-sm font-semibold px-6 py-1 rounded-full hover:bg-hover-button transition">
                Selengkapnya
            </a>
        </div>
        @endforeach
    </div>
</section>

{{-- Review --}}
<section class="px-4 sm:px-6 md:px-10 lg:px-[100px] xl:px-[170px] py-[60px] bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[40px] md:gap-[60px] items-start justify-center">
        {{-- Gambar kiri --}}
        <div class="w-full">
            <img src="{{ asset('img/aktivitas1.jpg') }}"
                class="w-full h-auto md:w-[520px] md:h-[348px] object-cover shadow-md" alt="Review Image">
        </div>

        {{-- List Ulasan --}}
        <div class="flex flex-col gap-[24px]">
            <div>
                <h3 class="text-2xl sm:text-3xl md:text-[40px] font-bold leading-tight text-black">Ulasan</h3>
                <p class="text-[14px] sm:text-[16px] text-black leading-[24px]">See what our guests have to say</p>
            </div>

            <div class="flex flex-col gap-[24px] md:gap-[40px]">
                @foreach ([['name' => 'HappyTraveler', 'review' => 'Wonderful experience! Highly recommend.'],
                ['name' => 'NatureLover19', 'review' => 'Incredible views and friendly staff.']] as $r)
                <div class="bg-gray-200 rounded-[6px] p-4 flex flex-col gap-4">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-black/10 rounded-full"></div>
                            <span class="text-[14px] text-black truncate">{{ $r['name'] }}</span>
                        </div>
                        <div class="flex text-yellow-400 gap-[2px]">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star text-sm"></i>
                                @endfor
                        </div>
                    </div>
                    <p class="text-[14px] sm:text-[16px] leading-[24px] text-black">{{ $r['review'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection