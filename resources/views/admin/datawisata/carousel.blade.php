<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex">

    @include('components.admin.sidebar')
    <div class="flex-1 flex flex-col">
        @include('components.admin.navbar')

        <main class="p-6">
            <h1 class="text-xl font-bold mb-4">Carousel</h1>

            <div class="bg-white p-6 rounded shadow">
                <p class="text-sm text-gray-700 mb-4">Kelola gambar slider yang ditampilkan di halaman utama website.</p>

                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-upload mr-2"></i>Tambah Gambar
                </button>

                {{-- List Carousel --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
                    <div class="border rounded overflow-hidden shadow">
                        <img src="/storage/carousel/1.jpg" alt="carousel1" class="w-full h-40 object-cover">
                        <div class="p-2 flex justify-between text-sm">
                            <span>carousel1.jpg</span>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </div>
                    </div>
                    {{-- Tambahkan lainnya --}}
                </div>
            </div>
        </main>
    </div>

</body>
</html>
