<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gudang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col gap-5">
                    @if(!empty(session("success-edit")))
                        <div id="flash" class="bg-green-200 text-green-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('success-edit') }}</div>
                    @endif
                    @if(!empty(session("success-save")))
                        <div id="flash" class="bg-green-200 text-green-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('success-save') }}</div>
                    @endif
                    @if(!empty(session("fail-edit")))
                        <div id="flash" class="bg-red-200 text-red-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('fail-edit') }}</div>
                    @endif
                    @if(!empty(session("gagal-save")))
                        <div id="flash" class="bg-red-200 text-red-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('gagal-save') }}</div>
                    @endif
                    <script>
                        setTimeout(() => {
                            document.getElementById("flash").classList.toggle("opacity-0");
                        }, 4000);
                    </script>
                    <div class="flex justify-end gap-10">
                        <div class="py-2 bg-green-400 text-md font-bold self-end rounded-lg hover:bg-green-500">
                            <a href="{{ route('gudang.input')}}" class="px-5 py-2">Tambah Produk</a>
                        </div>
                        <div class="py-2 bg-green-400 text-md font-bold self-end rounded-lg hover:bg-green-500">
                            <a href="{{ route('gudang.edit')}}" class="px-5 py-2">Edit Produk</a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 pt-2">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Jumlah Item</h2>
                            @php
                                $total_item = 0;
                                $total_stok = 0;

                                foreach($product as $key => $products){
                                    $total_stok += $products->stock;
                                    $total_item += 1;
                                }
                            @endphp
                            <p class="text-gray-700 text-3xl font-semibold">
                                {{$total_item}}
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Stok</h2>
                            <p class="text-gray-700 text-3xl font-semibold">{{$total_stok}}</p>
                        </div>

                        <!-- <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Pending Orders</h2>
                            <p class="text-gray-700 text-3xl font-semibold">35</p>
                        </div> -->
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Laporan inventori</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-center">
                                    <th class="px-4 py-2">Nama Produk</th>
                                    <!-- <th class="px-4 py-2">Category</th> -->
                                    <th class="px-4 py-2">Stok</th>
                                    <th class="px-4 py-2">Tanggal Kadaluarsa</th>
                                    <!-- <th class="px-4 py-2">Reorder Level</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $products)
                                    <tr class="text-center">
                                        <td class="border px-4 py-2">{{$products->name}}</td>
                                        <td class="border px-4 py-2">{{$products->stock}}</td>
                                        <td class="border px-4 py-2">{{$products->tgl_kadaluarsa}}</td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-4">Tugas yang Ditugaskan</h2>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Periksa dan perbarui stok</li>
                            <li>Menyiapkan pesanan untuk pengiriman</li>
                            <li>Mengatur tata letak gudang</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
