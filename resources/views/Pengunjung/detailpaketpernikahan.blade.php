@extends('Pengunjung.Layouts.app')

@section('content')
<section class="bg-white h-[804px] flex flex-col items-center justify-center gap-[39px] px-4">
    {{-- Judul --}}
    <h2 class="text-[40px] font-bold text-center leading-[48px] h-[53px]">Paket Pernikahan</h2>

    {{-- Gambar + Fasilitas --}}
    <div class="flex flex-row gap-[56px] justify-center items-center w-[695.92px] overflow-hidden">
        {{-- Gambar dengan border --}}
        <div class="w-[356.88px] h-[362px] border-[2px] border-black rounded-[10px] relative">
            <img src="{{ asset('img/makrab.png') }}"
                 class="absolute left-[12.82px] top-[15.41px] w-[332.23px] h-[337px] rounded-[10px] object-cover"
                 alt="Makrab">
        </div>

        {{-- Fasilitas --}}
        <div class="relative w-[220.83px] h-[365px] bg-light p-4 text-[25px] leading-[24px] text-black">
            <p>Fasilitas : <br><br></p>
            <ul class="list-disc pl-6 space-y-[2px]"> 
                <li>Pendopo</li>
                <li>Sound System</li>
                <li>Panggung</li>
                <li>WiFi</li>
                <li>Ruang Panitia</li>
                <li>15 Toilet</li>
                <li>Tikar</li>
                <li>Lampu</li>
                <li>Tembak</li>
                <li>Parkir</li>
            </ul>
        </div>
    </div>

    {{-- Harga --}}
    <div class="text-center h-[58px] flex flex-col items-center justify-center">
        <div class="text-[20px] font-bold leading-[121.2%] tracking-[-0.015em]">IDR 20.000,00 / Orang</div>
        <div class="text-[16px]">Minimal 60 orang</div>
    </div>
    {{-- Tombol Navigasi --}}
    <div class="flex flex-row justify-between items-center w-full max-w-[1200px] mt-6 px-[60px]">
        {{-- Tombol Kembali --}}
        <div class="flex items-center gap-4">
            <i class="fa-solid fa-arrow-left text-2xl"></i>
            <a href="{{ route('paketwisata') }}" class="bg-button text-white text-[14px] font-bold px-[40px] py-[10px] rounded-full w-[280px] h-[42px] flex items-center justify-center hover:bg-hover-button transition">
                Kembali
            </a>
        </div>

        {{-- Tombol Pesan --}}
        <div class="flex items-center gap-4">
            <a href="{{ route('formbooking', ['paket' => 'Paket Pernikahan']) }}" class="bg-button text-white text-[14px] font-bold px-[40px] py-[10px] rounded-full w-[280px] h-[42px] flex items-center justify-center hover:bg-hover-button transition">
                Pesan
            </a>
            <i class="fa-solid fa-arrow-right text-2xl"></i>
        </div>
    </div>
    </div>
</section>
@endsection
