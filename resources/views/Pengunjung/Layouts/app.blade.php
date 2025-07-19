<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Desa Wisata Sangurejo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Load Tailwind via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     <link rel="stylesheet" href="build/assets/app-[hash].css">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body class="bg-white text-gray-800 font-opensans">

    {{-- Header --}}
    <x-layouts.header />

    {{-- Main --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-layouts.footer />

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
    
</body>

</html>
