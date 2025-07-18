@extends('Pengunjung.Layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-center text-2xl font-bold mb-6">FORM PAKET WISATA</h1>

    {{-- Informasi Pengunjung --}}
    <div class="border p-4 mb-6 rounded">
        <h2 class="text-lg font-semibold mb-4">Informasi Pengunjung</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" class="w-full border rounded p-2 mt-1" placeholder="Masukkan Nama Lengkap">
            </div>
            <div>
                <label class="block font-medium">Email <span class="text-red-500">*</span></label>
                <input type="email" class="w-full border rounded p-2 mt-1" placeholder="Masukkan Email Aktif">
            </div>
            <div>
                <label class="block font-medium">Nomor WhatsApp</label>
                <input type="text" class="w-full border rounded p-2 mt-1" placeholder="Masukkan Nomor WhatsApp">
            </div>
            <div class="md:col-span-2">
                <label class="block font-medium">Alamat</label>
                <textarea class="w-full border rounded p-2 mt-1" placeholder="Masukkan Alamat Tempat Tinggal"></textarea>
            </div>
        </div>
    </div>

    {{-- Pilih Tanggal Datang --}}
    <div class="border p-4 mb-6 rounded">
        <h2 class="text-lg font-semibold mb-4">Pilih Tanggal Datang</h2>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="md:w-1/2 w-full">
                <label class="block font-medium">Tanggal Datang</label>
                <input type="date" class="w-full border rounded p-2 mt-1">
            </div>
            <div class="md:w-1/2 w-full">
                <label class="block font-medium">Jam Operasional</label>
                <ul class="mt-2 text-sm text-gray-600 leading-relaxed">
                    <li>Senin - Jumat: 08:30 – 21:55 WIB</li>
                    <li>Sabtu: 09:00 – 22:55 WIB</li>
                    <li>Minggu: 09:00 – 22:25 WIB</li>
                    <li>Libur Nasional: 09:00 – 22:00 WIB</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Informasi Pemesanan --}}
    <div class="border p-4 mb-6 rounded">
        <h2 class="text-lg font-semibold mb-4">Informasi Pemesanan</h2>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block font-medium">Nama Paket</label>
                <input type="text"
                    class="w-full border rounded p-2 mt-1"
                    name="nama_paket"
                    value="{{ request('paket') ?? 'Paket Wisata A' }}"
                    readonly>
            </div>
            <div>
                <label class="block font-medium">Jumlah Peserta</label>
                <input type="number" min="1" value="1" class="w-full border rounded p-2 mt-1">
            </div>
            <div>
                <label class="block font-medium">Harga</label>
                <p class="mt-1 text-lg font-semibold">IDR 25,000.00/pax</p>
            </div>
            <div>
                <label class="block font-medium">Catatan</label>
                <textarea class="w-full border rounded p-2 mt-1" placeholder="Masukkan Catatan jika ada"></textarea>
            </div>
        </div>
    </div>

    {{-- Tombol Navigasi --}}
    <div class="w-full flex flex-col md:flex-row justify-between items-center gap-4 md:gap-[165px] mt-6 px-4">
        {{-- Tombol Kembali --}}
        <div class="flex items-center gap-2 w-full md:w-[280px]">
            <i class="fa-solid fa-arrow-left text-[18px] md:text-2xl text-green-700"></i>
            <a href="{{ route('paketwisata') }}"
                class="bg-button text-white text-xs md:text-[14px] font-bold px-4 py-1.5 md:px-[40px] md:py-[10px] rounded-full w-full md:w-[280px] h-[36px] md:h-[42px] flex items-center justify-center hover:bg-hover-button transition duration-300">
                Kembali
            </a>
        </div>

        {{-- Tombol Pesan --}}
        <div class="flex items-center gap-2 w-full md:w-[280px]">
            <a href="#"
                class="bg-button text-white text-xs md:text-[14px] font-bold px-4 py-1.5 md:px-[40px] md:py-[10px] rounded-full w-full md:w-[280px] h-[36px] md:h-[42px] flex items-center justify-center hover:bg-hover-button transition duration-300">
                Pesan
            </a>
            <i class="fa-solid fa-arrow-right text-[18px] md:text-2xl text-green-700"></i>
        </div>
    </div>

</div>
@endsection