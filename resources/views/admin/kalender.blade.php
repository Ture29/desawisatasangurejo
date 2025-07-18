<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalender Event & Notifikasi</title>
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
            <h1 class="text-xl font-bold text-center mb-1">Kalender Event & Notifikasi</h1>
            <p class="text-gray-600 text-center mb-6">Kelola Kalender Event & Notifikasi Desa Wisata Sangurejo</p>

            {{-- Toolbar --}}
            <div class="flex flex-wrap justify-between items-center mb-4">
                <div class="flex space-x-2 items-center">
                    <button class="border border-gray-300 rounded px-3 py-1 bg-white hover:bg-gray-100">Hari Ini</button>
                    <input type="date" class="border border-gray-300 rounded px-3 py-1">
                    <span id="current-time" class="text-sm text-gray-700 font-medium"></span>
                    <select class="border border-gray-300 rounded px-3 py-1">
                        <option>Waktu: Indonesia</option>
                    </select>
                    <select class="border border-gray-300 rounded px-3 py-1">
                        <option>1 Minggu</option>
                        <option>3 Hari</option>
                    </select>
                </div>
                <a href="/admin/kalender/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    + Tambah Event
                </a>
            </div>

            {{-- Kalender Grid (Dummy Table) --}}
            <div class="overflow-x-auto bg-white rounded shadow p-4">
                <table class="w-full text-sm text-center border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Senin 12</th>
                            <th class="border p-2">Selasa 13</th>
                            <th class="border p-2">Rabu 14</th>
                            <th class="border p-2">Kamis 15</th>
                            <th class="border p-2">Jumat 16</th>
                            <th class="border p-2">Sabtu 17</th>
                            <th class="border p-2">Minggu 18</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h-32 align-top">
                            <td class="border p-2 text-left">
                                <div class="bg-blue-100 text-blue-800 rounded px-2 py-1 mb-1 text-xs w-fit">
                                    Kunjun. SMP <br><span class="text-[10px]">09.00 - 10.00</span>
                                </div>
                                <div class="bg-red-100 text-red-700 rounded px-2 py-1 text-xs w-fit">
                                    Outbond <br><span class="text-[10px]">11.00 - 12.00</span>
                                </div>
                            </td>
                            <td class="border p-2 text-left"></td>
                            <td class="border p-2 text-left">
                                <div class="bg-pink-100 text-pink-700 rounded px-2 py-1 text-xs w-fit">
                                    Gathering CV <br><span class="text-[10px]">10.00 - 11.00</span>
                                </div>
                            </td>
                            <td class="border p-2 text-left"></td>
                            <td class="border p-2 text-left">
                                <div class="bg-red-100 text-red-700 rounded px-2 py-1 text-xs w-fit">
                                    Cafekopi <br><span class="text-[10px]">13.00 - 15.00</span>
                                </div>
                            </td>
                            <td class="border p-2 text-left"></td>
                            <td class="border p-2 text-left"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    {{-- JS for real-time clock --}}
    <script>
        function updateTime() {
            const now = new Date();
            const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
            const formatted = now.toLocaleTimeString('id-ID', timeOptions);
            document.getElementById('current-time').textContent = formatted;
        }

        setInterval(updateTime, 1000);
        updateTime(); // run once on load
    </script>

</body>
</html>
