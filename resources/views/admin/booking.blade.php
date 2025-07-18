<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola data booking</title>
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
            <h1 class="text-2xl font-semibold mb-1">Kelola Data Booking</h1>
            <p class="text-gray-600 mb-6">Edit atau Perbarui Data Booking Desa Wisata Sangurejo</p>

            <div class="bg-white p-4 rounded shadow overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3">Nama Paket</th>
                            <th class="px-4 py-3">Deskripsi</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t">
                            <td class="px-4 py-3">Paket Makrab</td>
                            <td class="px-4 py-3 whitespace-pre-line">
                                Nama: <br>
                                No WhatsApp: <br>
                                Email: <br>
                                Alamat: <br>
                                Tanggal Booking: <br>
                                Jumlah Peserta: <br>
                                Catatan:
                            </td>
                            <td class="px-4 py-3 space-x-3">
                                <a href="/admin/booking/edit/1" class="text-blue-600">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="/admin/booking/delete/1" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        {{-- Tambahkan baris lainnya jika ada data dummy tambahan --}}
                    </tbody>
                </table>
            </div>

            <div class="mt-6 text-right">
                <a href="/admin/booking/create" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                    Tambah Data
                </a>
            </div>
        </main>
    </div>

</body>
</html>
