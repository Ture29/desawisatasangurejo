<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri - Desa Wisata Sangurejo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="bg-gray-100 flex">

    {{-- Sidebar --}}
    @include('components.admin.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">

        {{-- Navbar --}}
        @include('components.admin.navbar')

        {{-- Konten --}}
        <main class="p-6">
        <div class="flex items-center justify-between mb-4">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Galeri</h1>
        <p class="text-gray-600">Kelola dokumentasi foto Desa Wisata Sangurejo</p>
    </div>

    <a href="/admin/galeri/create" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
        + Tambah Foto
    </a>
</div>


            <table class="w-full mt-6 text-sm border">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="p-3">Foto</th>
                        <th class="p-3">Deskripsi</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Baris Galeri 1 --}}
                    <tr class="border-b">
                        <td class="p-3">
                            <img src="/img/galeri1.jpg" alt="Foto 1" class="w-20 h-20 object-cover rounded">
                        </td>
                        <td class="p-3 align-top">
                            Kegiatan pelatihan kerajinan bambu bersama warga dan pengunjung.
                        </td>
                        <td class="p-3 align-top">
                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Baris Galeri 2 --}}
                    <tr class="border-b">
                        <td class="p-3">
                            <img src="/img/galeri2.jpg" alt="Foto 2" class="w-20 h-20 object-cover rounded">
                        </td>
                        <td class="p-3 align-top">
                            Outbond dan edukasi lingkungan oleh siswa-siswi dari luar daerah.
                        </td>
                        <td class="p-3 align-top">
                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Tambahkan baris lain jika diperlukan --}}
                </tbody>
            </table>
        </main>
    </div>

</body>
</html>
