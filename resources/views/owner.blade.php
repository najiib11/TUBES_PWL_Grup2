<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD:resources/views/kepala_toko.blade.php
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('owner') }}
=======
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Owner') }}
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90:resources/views/owner.blade.php
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(!empty(session("success")))
                <div id="flash" class="bg-green-200 text-green-600 py-2 text-lg font-bold text-center transition-opacity duration-1000">{{ session("success") }}</div>
            @endif
            @if(!empty(session("gagal")))
                <div id="flash" class="bg-red-200 text-red-600 py-2 text-lg font-bold text-center transition-opacity duration-1000">{{ session("gagal") }}</div>
            @endif
            <script>
                let getFlash = document.getElementById("flash");
                setTimeout(() => {
                    getFlash.classList.toggle("opacity-0");
                }, 4000);
            </script>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Penjualan</h2>
                            <p class="text-gray-700 text-3xl font-semibold">Rp. 20.000</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Staf</h2>
                            <p class="text-gray-700 text-3xl font-semibold">15</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Status Inventaris</h2>
                            <p class="text-gray-700 text-3xl font-semibold">80% Full</p>
                        </div>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Laporan Penjualan</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Tanggal</th>
                                    <th class="px-4 py-2">Nama Produk</th>
                                    <th class="px-4 py-2">Jumlah Terjual</th>
                                    <th class="px-4 py-2">Total Penjualan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">2025-01-03</td>
                                    <td class="border px-4 py-2">Kopi Kapal Api</td>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">Rp. 10.000</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">2025-01-03</td>
                                    <td class="border px-4 py-2">Kopi Kapal Api</td>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">RP. 10.000</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex justify-between">
                            <h2 class="text-xl font-bold">Kinerja Staf</h2>
                            <a href="{{route('owner.input')}}" class="justify-self-end text-lg font-bold bg-green-400 hover:bg-green-600 hover:text-black px-4 py-1 rounded-lg -mt-2">Add Staf</a>
                        </div>

                        <table class="w-full table-auto mt-1">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Nama Staf</th>
                                    <th class="px-4 py-2">Peran</th>
                                    <th class="px-4 py-2">Penjualan</th>
                                    <th class="px-4 py-2">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Agus</td>
                                    <td class="border px-4 py-2">Kasir</td>
                                    <td class="border px-4 py-2">Rp. 10.000</td>
                                    <td class="border px-4 py-2">4.5</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Jane Smith</td>
                                    <td class="border px-4 py-2">Sales Associate</td>
                                    <td class="border px-4 py-2">$800</td>
                                    <td class="border px-4 py-2">4.8</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
