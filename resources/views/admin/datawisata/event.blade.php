<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex">

    @include('components.admin.sidebar')
    <div class="flex-1 flex flex-col">
        @include('components.admin.navbar')

        <main class="p-6">
            <h1 class="text-xl font-bold mb-4">Event</h1>

            <div class="bg-white p-6 rounded shadow">
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    <i class="fas fa-plus mr-2"></i> Tambah Event
                </button>

                <table class="table-auto w-full mt-6 text-sm text-left text-gray-700">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Nama Event</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Festival Budaya</td>
                            <td class="px-4 py-2">12 Agustus 2025</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-600 hover:underline mr-2">Edit</a>
                                <a href="#" class="text-red-600 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        {{-- Tambah data lainnya --}}
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
