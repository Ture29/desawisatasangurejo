@extends('Pengunjung.Layouts.app')

@section('content')
{{-- Banner --}}
<x-sections.banner />
{{-- Galeri Foto --}}
<section class="px-8 md:px-16 lg:px-32 py-12">
    <h2 class="text-[24px] font-bold text-black mb-6">Galeri Foto</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ([
        ['image' => 'aktivitas1.jpg', 'label' => 'Outbound SMA'],
        ['image' => 'aktivitas2.jpg', 'label' => 'Pramuka'],
        ['image' => 'aktivitas3.jpg', 'label' => 'Wisuda'],
        ['image' => 'aktivitas4.jpg', 'label' => 'Pentas Seni'],
        ['image' => 'aktivitas5.jpg', 'label' => 'Outbound'],
        ['image' => 'Sikrab.jpg', 'label' => 'Outbound'],
        ] as $foto)
        <div class="bg-white border rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset('img/' . $foto['image']) }}" alt="{{ $foto['label'] }}" class="w-full h-[180px] object-cover">
            <div class="p-2 text-center font-semibold text-sm">{{ $foto['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- Galeri Video --}}
<section class="px-8 md:px-16 lg:px-32 py-12">
    <h2 class="text-[24px] font-bold text-black mb-6">Galeri Video</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ([
        ['image' => 'aktivitas1.jpg', 'label' => 'Outbound SMA'],
        ['image' => 'aktivitas2.jpg', 'label' => 'Pramuka'],
        ['image' => 'aktivitas3.jpg', 'label' => 'Wisuda'],
        ['image' => 'aktivitas4.jpg', 'label' => 'Pentas Seni'],
        ['image' => 'aktivitas5.jpg', 'label' => 'Outbound'],
        ['image' => 'Sikrab.jpg', 'label' => 'Outbound'],
        ] as $video)
        <div class="bg-white border rounded-lg overflow-hidden shadow-sm">
            <img src="{{ asset('img/' . $video['image']) }}" alt="{{ $video['label'] }}" class="w-full h-[180px] object-cover">
            <div class="p-2 text-center font-semibold text-sm">{{ $video['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>
@endsection