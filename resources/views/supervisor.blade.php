<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supervisor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                        $total_harga = 0;
                        $total_staf = 0;

                        foreach($product as $products){
                            $total_harga += $products->price;
                        }

                        foreach($staf as $stafs){
                            $total_staf++;
                        }
                    @endphp
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Harga Barang</h2>
                            <p class="text-gray-700 text-3xl font-semibold before:content-['Rp']">{{number_format($total_harga, 2, ",", ".") ?? "0"}}</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Member</h2>
                            <p class="text-gray-700 text-3xl font-semibold">{{$total_staf ?? "0"}}</p>
                        </div>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Laporan Harian</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Tanggal</th>
                                    <th class="px-4 py-2">Nama Produk</th>
                                    <th class="px-4 py-2">Stok</th>
                                    <th class="px-4 py-2">Harga Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $products)
                                <tr class="text-center">
                                    <td class="border px-4 py-2">{{$products->created_at}}</td>
                                    <td class="border px-4 py-2">{{$products->name}}</td>
                                    <td class="border px-4 py-2">{{$products->stock}}</td>
                                    <td class="border px-4 py-2">{{$products->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-4">Tugas yang Ditugaskan</h2>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Periksa tingkat inventaris dan pesan ulang jika perlu</li>
                            <li>Memantau kinerja tim dan memberikan umpan balik</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
