@extends('Pengunjung.Layouts.app')

@section('content')
{{-- Banner --}}
<x-sections.banner />

<section class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-10">
    <div class="flex flex-col md:flex-row items-stretch gap-8">
        <!-- Konten Kanan -->
        <div class="w-full md:w-4/5 flex flex-col justify-between">
            <div>
                <h2 class="text-[40px] font-bold text-black mb-4">Desa Wisata Sangurejo</h2>
                <p class="text-[25px] text-black mb-8 leading-relaxed">
                    Desa Sangurejo di Turi, Sleman menyuguhkan panorama alam, edukasi pertanian, serta budaya lokal yang unik.
                    Ikon utamanya adalah <strong>Embung Kaliaji</strong>, danau buatan di kaki Merapi sebagai pusat aktivitas wisata dan konservasi.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                    <!-- Keindahan Alam Asri -->
                    <div class="bg-light rounded-xl border border-gray-200 p-6 shadow hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-3 text-black">Alam & Petualangan</h3>
                        <ul class="list-disc list-inside text-[16px] text-gray-700 space-y-1 leading-relaxed">
                            <li>Embung Kaliaji untuk rekreasi keluarga</li>
                            <li>Susur sungai dan jalur tracking</li>
                        </ul>
                    </div>

                    <!-- Fasilitas Lengkap -->
                    <div class="bg-light rounded-xl border border-gray-200 p-6 shadow hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-3 text-black">Fasilitas Lengkap</h3>
                        <ul class="list-disc list-inside text-[16px] text-gray-700 space-y-1 leading-relaxed">
                            <li>Parkir, toilet, Wi‑Fi, mushola</li>
                            <li>Gazebo, homestay & outbound</li>
                            <li>Dukungan ProKlim ramah lingkungan</li>
                        </ul>
                    </div>

                    <!-- Aktivitas Edukasi & Kebudayaan -->
                    <div class="bg-light rounded-xl border border-gray-200 p-6 shadow hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-3 text-black">Edukasi & Budaya</h3>
                        <ul class="list-disc list-inside text-[16px] text-gray-700 space-y-1 leading-relaxed">
                            <li>Petik salak & tanam padi</li>
                            <li>Pencak silat & jemparingan</li>
                            <li>Pagelaran tari dan musik tradisi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tombol -->
            <div>
                <a href="{{ route('tentangkami') }}"
                    class="block w-[178px] h-[37px] bg-button text-white text-center font-semibold 
                    text-[14px] leading-[37px] rounded-[8px] shadow hover:bg-hover-button transition">
                    Selengkapnya
                </a>
            </div>
        </div>

        <!-- Gambar -->
        <div class="w-full md:w-2/5">
            <div class="relative h-full rounded-xl overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/baner.jpg') }}"
                    alt="Desa Wisata Sangurejo"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>
<!-- Paket Wisata Section -->
<section class="bg-light py-15 px-4 sm:px-6 md:px-10 lg:px-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-black mb-12">Paket Wisata Favorit</h2>

        <div class="grid md:grid-cols-3 gap-10">
            @foreach ([
            ['title' => 'PAKET MAKRAB', 'image' => 'makrab.png', 'desc' => 'Malam Keakraban untuk pelajar/komunitas', 'harga' => 'Rp 75.000/orang', 'link' => route('detailpaketmakrab')],
            ['title' => 'PAKET PRAMUKA', 'image' => 'Sikrab.jpg', 'desc' => 'Kegiatan Pramuka & Camping Edukasi', 'harga' => 'Rp 90.000/orang', 'link' => route('detailpaketcamping')],
            ['title' => 'PAKET PERNIKAHAN', 'image' => 'pernikahan.webp', 'desc' => 'Paket Pernikahan Bernuansa Alam', 'harga' => 'Rp 5.000.000/paket', 'link' => route('detailpaketpernikahan')]
            ] as $paket)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-[1.03] transition-transform flex flex-col">
                <img src="{{ asset('img/' . $paket['image']) }}" alt="{{ $paket['title'] }}" class="w-full h-48 object-cover" />
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h3 class="text-xl font-semibold text-black mb-1">{{ $paket['title'] }}</h3>
                    <p class="text-black text-sm mb-3">{{ $paket['desc'] }}</p>
                    <p class="text-black font-bold text-base mb-4">{{ $paket['harga'] }}</p>
                    <a href="{{ $paket['link'] }}" class="bg-button hover:bg-hover-button text-white font-semibold rounded-md px-4 py-2 w-full text-center">
                        Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        {{-- Tombol bawah --}}
        <a href="{{ route('paketwisata') }}" class="mt-12 inline-block bg-button hover:bg-hover-button text-white font-semibold px-6 py-3 rounded-md text-sm shadow-md transition duration-300">
            Lihat Semua Paket
        </a>
    </div>
</section>


<section class="py-15 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            {{-- Kolom Kiri - Form Ulasan --}}
            <div class="bg-white rounded-2xl border border-neutral-300 p-6 shadow-md flex flex-col gap-6">
                <div class="text-center">
                    <h3 class="text-2xl font-semibold leading-8">Beri Ulasan</h3>
                    <p class="text-sm text-neutral-600 leading-5">
                        Bagikan pengalaman kamu di Desa Wisata Sangurejo
                    </p>
                </div>

                {{-- Rating Bintang --}}
                <div class="flex items-center justify-center gap-5">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa-solid fa-star text-yellow-400 text-2xl cursor-pointer hover:text-yellow-500"></i>
                        @endfor
                        <span class="text-sm text-gray-500 ml-2">4.5 stars</span>
                </div>

                {{-- Textarea --}}
                <textarea
                    class="w-full h-24 p-3 border border-neutral-300 rounded-lg text-sm text-gray-700 resize-none"
                    placeholder="Tulis ulasan kamu...">
                </textarea>

                {{-- Tombol Kirim --}}
                <button
                    class="w-full bg-button hover:bg-hover-button text-white font-semibold text-base py-2.5 rounded-lg transition">
                    Kirim
                </button>
            </div>

            {{-- Kolom Kanan - Daftar Ulasan --}}
            <div class="flex flex-col gap-6">
                <div>
                    <h3 class="text-4xl font-bold text-black">Ulasan</h3>
                    <p class="text-base text-black">Lihat apa yang dikatakan oleh tamu kami</p>
                </div>

                <div class="flex flex-col gap-6">
                    @foreach ([['name' => 'HappyTraveler', 'review' => 'Wonderful experience! Highly recommend.'],
                    ['name' => 'NatureLover19', 'review' => 'Incredible views and friendly staff.']] as $r)
                    <div class="bg-gray-100 rounded-lg p-4 flex flex-col gap-3">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                                <span class="text-sm font-medium text-black truncate">{{ $r['name'] }}</span>
                            </div>
                            <div class="flex text-yellow-400 gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fa-solid fa-star text-sm"></i>
                                    @endfor
                            </div>
                        </div>
                        <p class="text-sm text-black leading-6">{{ $r['review'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Aktivitas Carousel --}}
<x-sections.aktivitas-carousel />
@endsection