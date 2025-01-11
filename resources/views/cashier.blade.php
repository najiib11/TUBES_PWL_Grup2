<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kasir') }}
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Tambahkan Transaksi</h2>
                        <form action="{{route('kasir.tambah')}}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-gray-700">Nama Produk</label>
                                    <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Kuantitas</label>
                                    <input type="number" name="stock" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Harga</label>
                                    <input type="text" name="price" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                                </div>
                                {{-- <div>
                                    <label class="block text-gray-700">Total</label>
                                    <input type="text" class="w-full p-2 border border-gray-300 rounded mt-1" readonly>
                                </div> --}}
                            </div>
                            <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded" value="Tambah Transaksi">
                        </form>
                    </div> -->


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-4">Transaksi terbaru</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Nama Cabang</th>
                                    <th class="px-4 py-2">Nama Produk</th>
                                    <th class="px-4 py-2">Kuantitas</th>
                                    <th class="px-4 py-2">Harga</th>
                                    <th class="px-4 py-2">Total</th>
                                    <th class="px-4 py-2">Tanggal Pembelian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactionItem as $transactionItems)
                                <tr class="text-center">
                                    <td class="border px-4 py-2">{{$transactionItems->transaction->store->name}}</td>
                                    <td class="border px-4 py-2">{{$transactionItems->product->name}}</td>
                                    <td class="border px-4 py-2">{{$transactionItems->quantity}}</td>
                                    <td class="border px-4 py-2">RP.{{number_format($transactionItems->product->price, 2, ',', '.')}}</td>
                                    <td class="border px-4 py-2">RP.{{number_format($transactionItems->transaction->total, 2, ',', '.')}}</td>\
                                    <td class="border px-4 py-2">{{$transactionItems->created_at}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
