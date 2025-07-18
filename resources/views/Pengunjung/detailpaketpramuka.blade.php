@extends('Pengunjung.Layouts.app')

@section('content')
<section class="bg-white py-16 flex flex-col items-center gap-10 px-4">
    {{-- Judul --}}
    <h2 class="text-4xl font-bold text-center leading-tight">Paket Pramuka</h2>

    {{-- Gambar + Fasilitas --}}
    <div class="flex flex-row gap-10 w-[920px] h-[420px]">
        {{-- Gambar --}}
        <div class="w-1/2 h-full border-2 border-black rounded-[10px] p-[12px] flex items-center justify-center bg-white">
            <img src="{{ asset('img/makrab.png') }}"
                 alt="Makrab"
                 class="w-full h-full object-cover rounded-[10px]">
        </div>

        {{-- Fasilitas --}}
        <div class="w-1/2 h-full bg-light rounded-[10px] p-6 text-[25px] text-black overflow-y-auto">
            <p class="font-semibold mb-2">Fasilitas:</p>
            <ul class="list-disc pl-6 mb-4 space-y-1">
                <li>Area Camping Ground (max 420 orang)</li>
                <li>Pendopo</li>
                <li>Sound System</li>
                <li>Panggung</li>
                <li>WiFi</li>
                <li>Ruang Panitia</li>
                <li>Ruang P3K</li>
                <li>15 Toilet</li>
                <li>Tikar</li>
                <li>3 Lampu Tembak</li>
                <li>Listrik</li>
                <li>Parkir</li>
            </ul>

            <p class="font-semibold mb-2">Fasilitas Berbayar:</p>
            <ul class="list-disc pl-6 space-y-1">
                <li>Api Unggun + Oncor 3 Rp.200.000</li>
                <li>Oncor Rp.10.000/bambu</li>
                <li>Outbound Rp.80.000</li>
                <li>Jalur Tracking Rp.10.000/orang</li>
                <li>Ruang Panitia</li>
            </ul>
        </div>
    </div>

  {{-- Harga: Pilihan Paket --}}
<div class="flex flex-wrap justify-center items-center gap-4 mt-6">
    <div class="border border-black rounded-[10px] px-6 py-2 text-center w-[180px]">
        <div class="font-bold">PAKET 3 HARI<br>2 MALAM</div>
        <div class="text-sm">Rp 40.000/orang</div>
    </div>
    <div class="border border-black rounded-[10px] px-6 py-2 text-center w-[180px]">
        <div class="font-bold">PAKET 2 HARI<br>1 MALAM</div>
        <div class="text-sm">Rp 30.000/orang</div>
    </div>
    <div class="border border-black rounded-[10px] px-6 py-2 text-center w-[180px]">
        <div class="font-bold">PAKET 1 HARI<br>1 MALAM</div>
        <div class="text-sm">Rp 25.000/orang</div>
    </div>
</div>


    {{-- Tombol Navigasi --}}
    <div class="flex justify-between items-center w-full max-w-[1200px] px-10">
        {{-- Tombol Kembali --}}
        <div class="flex items-center gap-4">
            <i class="fa-solid fa-arrow-left text-2xl"></i>
            <a href="{{ route('paketwisata') }}" class="bg-button text-white text-sm font-bold px-10 py-2 rounded-full w-[280px] h-[42px] flex items-center justify-center hover:bg-hover-button transition">
                Kembali
            </a>
        </div>

        {{-- Tombol Pesan --}}
        <div class="flex items-center gap-4">
            <a href="{{ route('formbooking', ['paket' => 'Paket Pramuka']) }}" class="bg-button text-white text-sm font-bold px-10 py-2 rounded-full w-[280px] h-[42px] flex items-center justify-center hover:bg-hover-button transition">
                Pesan
            </a>
            <i class="fa-solid fa-arrow-right text-2xl"></i>
        </div>
    </div>
</section>
@endsection
