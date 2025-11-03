@extends('layouts.app')

@section('content')
<div class="space-y-6">
    {{-- ======== TOP CARDS ======== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-6">
        {{-- Total Kapster --}}
        <div class="bg-white p-6 rounded-xl shadow flex items-center gap-6">
            <div class="p-3 bg-blue-100 rounded-full">
                <i class="fa-solid fa-user text-blue-500 text-xl"></i>
            </div>
            <div>
                <h2 class="text-[#8BA3CB] text-sm font-medium">Total Kapster</h2>
                <p class="text-3xl font-bold text-gray-800">80</p>
            </div>
        </div>

        {{-- Jumlah Outlet --}}
        <div class="bg-white p-6 rounded-xl shadow flex items-center gap-6">
            <div class="p-3 bg-pink-100 rounded-full">
                <i class="fa-solid fa-store text-pink-500 text-xl"></i>
            </div>
            <div>
                <h2 class="text-[#8BA3CB] text-sm font-medium">Jumlah Outlet</h2>
                <p class="text-3xl font-bold text-gray-800">26</p>
            </div>
        </div>
    </div>

    {{-- ======== MIDDLE SECTION ======== --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
        {{-- Statistik Absensi --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold mb-4 text-gray-800">Statistik Absensi</h2>
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex justify-center md:w-1/2">
                    <div class="w-44 h-44">
                        <canvas id="absensiChart"></canvas>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <table class="w-full text-sm">
                        <thead class="text-gray-500 border-b">
                            <tr>
                                <th class="text-left font-medium py-1">Status</th>
                                <th class="text-left font-medium py-1">Jumlah</th>
                                <th class="text-left font-medium py-1">Persen</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="flex items-center gap-2 py-1">
                                    <span class="w-3 h-3 rounded-full bg-[#9DD8FF]"></span> Masuk
                                </td>
                                <td>70</td>
                                <td>87,5%</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-2 py-1">
                                    <span class="w-3 h-3 rounded-full bg-[#FFE47D]"></span> Izin
                                </td>
                                <td>5</td>
                                <td>6%</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-2 py-1">
                                    <span class="w-3 h-3 rounded-full bg-[#FF9359]"></span> Sakit
                                </td>
                                <td>5</td>
                                <td>6%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Riwayat --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold mb-4 text-gray-800">Riwayat</h2>
            <table class="w-full text-sm text-gray-700 border-separate border-spacing-y-2">
                <thead class="border-b text-gray-500">
                    <tr>
                        <th class="py-1 text-left">Admin</th>
                        <th class="py-1 text-left">Tanggal</th>
                        <th class="py-1 text-left">Kapster 1</th>
                        <th class="py-1 text-center"></th>
                        <th class="py-1 text-left">Kapster 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Admin 1</td>
                        <td>25/10/25</td>
                        <td>Ahmad</td>
                        <td class="text-center">→</td>
                        <td>Johan</td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>22/10/25</td>
                        <td>Bayu</td>
                        <td class="text-center">→</td>
                        <td>Aan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- ======== BOTTOM SECTION ======== --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
        {{-- Data Kapster --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold mb-4 text-gray-800">Data Kapster</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-gray-700 border-separate border-spacing-y-2">
                    <thead class="border-b text-gray-500">
                        <tr>
                            <th class="py-2 text-left">Nama</th>
                            <th class="py-2 text-left">ID Kapster</th>
                            <th class="py-2 text-left">No. HP</th>
                            <th class="py-2 text-left">Outlet</th>
                            <th class="py-2 text-left">Shift</th>
                            <th class="py-2 text-left">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad</td>
                            <td>1400101</td>
                            <td>0822006854875</td>
                            <td>Gumilir</td>
                            <td>Pagi</td>
                            <td>ahmadronni@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Bima Ardiansyah</td>
                            <td>1400102</td>
                            <td>082134567891</td>
                            <td>Kroya</td>
                            <td>Siang</td>
                            <td>bima.ardi@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Outlet --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="font-semibold mb-4 text-gray-800">Outlet</h2>
            <table class="w-full text-sm text-gray-700 border-separate border-spacing-y-2">
                <thead class="border-b text-gray-500">
                    <tr>
                        <th class="py-2 text-left">No</th>
                        <th class="py-2 text-left">Outlet</th>
                        <th class="py-2 text-left">Jumlah Kapster</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gumilir</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kroya</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
