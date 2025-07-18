<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kunjungan</title>
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
            <h1 class="text-2xl font-semibold mb-1">Kelola Data Kunjungan</h1>
            <p class="text-gray-600 mb-6">Edit atau Perbarui Data Booking Desa Wisata Sangurejo</p>

            <div class="overflow-x-auto bg-white rounded shadow">
                <table class="min-w-full text-sm text-left border border-gray-200">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3 border">Tanggal</th>
                            <th class="px-4 py-3 border">Nama</th>
                            <th class="px-4 py-3 border">Alamat</th>
                            <th class="px-4 py-3 border">Telepon</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t">
                            <td class="px-4 py-2">Selasa, 04-04-2025</td>
                            <td class="px-4 py-2">Aulia Noer Hikmah</td>
                            <td class="px-4 py-2">Bantul, Yogyakarta</td>
                            <td class="px-4 py-2">000000000000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">Rabu, 05-04-2025</td>
                            <td class="px-4 py-2">Aulia Noer Hikmah</td>
                            <td class="px-4 py-2">Bantul, Yogyakarta</td>
                            <td class="px-4 py-2">000000000000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">Kamis, 06-04-2025</td>
                            <td class="px-4 py-2">Aulia Noer Hikmah</td>
                            <td class="px-4 py-2">Bantul, Yogyakarta</td>
                            <td class="px-4 py-2">000000000000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">Jumat, 07-04-2025</td>
                            <td class="px-4 py-2">Aulia Noer Hikmah</td>
                            <td class="px-4 py-2">Bantul, Yogyakarta</td>
                            <td class="px-4 py-2">000000000000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Tombol Tambah --}}
            <div class="mt-4 text-right">
                <a href="/admin/kunjungan/create" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                    Tambah Pengunjung
                </a>
            </div>
        </main>
    </div>

</body>
</html>
