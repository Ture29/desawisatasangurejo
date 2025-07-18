@extends('pengunjung.layouts.app')

@section('content')

{{-- Judul Utama --}}
<div class="text-center mb-8">
    <h1 class="text-2xl md:text-3xl font-bold">Jadwal Kegiatan Desa Wisata Sangurejo</h1>
    <p class="text-sm text-gray-600 mt-2">Informasi ketersediaan kegiatan selama 7 hari ke depan</p>
</div>

{{-- Penjelasan Jenis Kegiatan --}}
<div class="grid md:grid-cols-2 gap-4 mb-10">
    <div class="bg-green-50 border border-green-200 p-4 rounded shadow">
        <h2 class="font-bold text-green-700 mb-2">Kegiatan Besar</h2>
        <ul class="list-disc ml-5 text-sm text-gray-700">
            <li>Contoh: Pramuka, LDKS, Kemah</li>
            <li>Menggunakan semua slot waktu: <strong>Pagi, Siang, Malam</strong></li>
            <li>Durasi kegiatan umumnya <strong>3–7 hari berturut-turut</strong></li>
            <li>Tidak diperbolehkan ada kegiatan lain pada tanggal tersebut</li>
        </ul>
    </div>
    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded shadow">
        <h2 class="font-bold text-yellow-700 mb-2">Kegiatan Kecil</h2>
        <ul class="list-disc ml-5 text-sm text-gray-700">
            <li>Contoh: Trekking, Workshop, Foto Alam</li>
            <li>Memakai <strong>1 slot waktu</strong> saja (contoh: Siang)</li>
            <li>Durasi singkat, biasanya <strong>2–4 jam</strong></li>
            <li>✅ Bisa digabung dengan kegiatan lain selama slot waktu berbeda</li>
        </ul>
    </div>
</div>

<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded">
    <h2 class="text-xl font-bold text-white bg-green-700 px-4 py-2 rounded-t">Filter Jadwal Kegiatan</h2>

    {{-- FILTER FORM (Menurun) --}}
    <form method="GET" class="bg-green-50 p-6 rounded-b space-y-4">
        {{-- Baris 1 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold mb-1">Jenis Kegiatan</label>
                <select name="kegiatan" class="w-full border px-3 py-2 rounded">
                    <option value="">-- Semua --</option>
                    <option value="Makrab">Makrab (Kegiatan Besar)</option>
                    <option value="Trekking">Trekking (Kegiatan Kecil)</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Foto Alam">Foto Alam</option>
                    <option value="Gathering">Gathering Perusahaan</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Durasi Hari</label>
                <select name="durasi" class="w-full border px-3 py-2 rounded">
                    <option value="">-- Semua --</option>
                    <option value="1">1 Hari</option>
                    <option value="2">2 Hari</option>
                    <option value="3">3 Hari</option>
                    <option value="7">1 Pekan</option>
                </select>
            </div>
        </div>

        {{-- Baris 2 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold mb-1">Waktu</label>
                <select name="slot_waktu" class="w-full border px-3 py-2 rounded">
                    <option value="">-- Semua --</option>
                    <option value="pagi">Pagi (06:00 - 10:00)</option>
                    <option value="siang">Siang (10:00 - 14:00)</option>
                    <option value="sore">Sore (14:00 - 18:00)</option>
                    <option value="malam">Malam (18:00 - 21:00)</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Tanggal Kegiatan</label>
                <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                    <input type="date" name="start" class="w-full sm:w-[calc(50%-1rem)] border px-3 py-2 rounded">
                    <span class="text-sm text-center">s/d</span>
                    <input type="date" name="end" class="w-full sm:w-[calc(50%-1rem)] border px-3 py-2 rounded">
                </div>
            </div>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end">
            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2 rounded flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                Tampilkan Jadwal
            </button>
        </div>
    </form>

    {{-- DAFTAR SLOT 7 HARI --}}
    <div class="mt-10">
        <h3 class="text-lg font-semibold mb-4">Jadwal 7 Hari ke Depan</h3>
        <div class="space-y-3">
            @php
            use Carbon\Carbon;
            $tanggalAwal = Carbon::now();
            $kegiatanDummy = [
            ['nama' => 'Makrab', 'tanggal' => '2025-07-04', 'tipe' => 'besar'],
            ['nama' => 'Trekking', 'tanggal' => '2025-07-05', 'tipe' => 'kecil', 'jam' => '10:00 - 12:00', 'slot' => 'siang'],
            ['nama' => 'Gathering', 'tanggal' => '2025-07-06', 'tipe' => 'kecil', 'jam' => '13:00 - 15:00', 'slot' => 'siang'],
            ];
            @endphp

            @for ($i = 0; $i < 7; $i++)
                @php
                $tanggal=$tanggalAwal->copy()->addDays($i)->format('Y-m-d');
                $labelTgl = $tanggalAwal->copy()->addDays($i)->translatedFormat('l, d F Y');
                $status = 'Tersedia';
                $catatan = null;
                $jam = null;
                $slot = null;

                foreach ($kegiatanDummy as $item) {
                if ($tanggal === $item['tanggal']) {
                $catatan = $item['nama'];
                $status = $item['tipe'] === 'besar' ? 'Penuh' : 'Terisi';
                $jam = $item['jam'] ?? null;
                $slot = $item['slot'] ?? null;
                break;
                }
                }

                $warna = match($status) {
                'Penuh' => 'bg-red-50 text-red-800 border-red-300',
                'Terisi' => 'bg-yellow-50 text-yellow-800 border-yellow-300',
                default => 'bg-green-50 text-green-800 border-green-300'
                };
                @endphp

                <div class="border-l-4 {{ $warna }} p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-semibold">{{ $labelTgl }}</p>
                            <p class="text-sm italic">{{ $status }}{{ $catatan ? ' – ' . $catatan : '' }}</p>
                            @if($jam)
                            <p class="text-xs text-gray-600">Jam: {{ $jam }}</p>
                            @endif
                            @if($slot)
                            <p class="text-xs text-gray-600">Slot Waktu: {{ ucfirst($slot) }}</p>
                            @endif
                        </div>
                        <div>
                            @if ($status === 'Tersedia' || ($status === 'Terisi' && $catatan !== 'Makrab'))
                            <a href="{{ route('paketwisata') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white text-xs px-4 py-2 rounded">Ajukan Reservasi</a>
                            @else
                            <span class="text-xs text-gray-500">Tidak tersedia</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endfor
        </div>
    </div>
</div>
@endsection