
   <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <h2 class="text-xl font-bold mb-4">Tambahkan Transaksi</h2>
    <form action="">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700">Nama Produk</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div>
                <label class="block text-gray-700">Kuantitas</label>
                <input type="number" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div>
                <label class="block text-gray-700">Harga</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div>
                <label class="block text-gray-700">Total</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded mt-1" readonly>
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Transaksi</button>
    </form>
</div>


<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold mb-4">Transaksi terbaru</h2>
    <table class="w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nama Produk</th>
                <th class="px-4 py-2">Kuantitas</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="text-center">

                <td class="border px-4 py-2">{{$product->name}}</td>
                <td class="border px-4 py-2">{{$product->stock}}</td>
                <td class="border px-4 py-2">RP.{{$product->price}}</td>
                <td class="border px-4 py-2">RP.{{$product->price * $product->stock}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
