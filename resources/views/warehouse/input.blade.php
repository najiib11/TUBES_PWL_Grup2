<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mt-5">
                        {{-- <h2 class="text-5xl font-bold py-10 text-center">Input Data Produk</h2> --}}
                        <form id="barangForm">
                            <div class="form-group">
                                <label for="namaBarang">Nama Produk :</label>
                                <input type="text" class="form-control" id="namaBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="hargaBarang">Harga Produk :</label>
                                <input type="number" class="form-control" id="hargaBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Jumlah Produk :</label>
                                <input type="number" class="form-control" id="jumlahBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Tanggal Pembelian :</label>
                                <input type="number" class="form-control" id="jumlahBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Tanggal Kadaluarsa :</label>
                                <input type="number" class="form-control" id="jumlahBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Deskripsi Produk :</label>
                                <input type="number" class="form-control" id="jumlahBarang" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('gudang.index')}}" class="btn btn-primary">Kembali</a>

                        </form>
                        <div id="responseMessage" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        document.getElementById('barangForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const namaBarang = document.getElementById('namaBarang').value;
            const hargaBarang = document.getElementById('hargaBarang').value;
            const jumlahBarang = document.getElementById('jumlahBarang').value;

            fetch('/api/barang', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    namaBarang: namaBarang,
                    hargaBarang: hargaBarang,
                    jumlahBarang: jumlahBarang
                })
            }).then(response => response.json())
            .then(data => {
                document.getElementById('responseMessage').innerText = data.message;
                document.getElementById('barangForm').reset();
            }).catch(error => {
                document.getElementById('responseMessage').innerText = 'Error: ' + error.message;
            });
        });
    </script>
</x-app-layout>



