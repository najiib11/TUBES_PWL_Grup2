<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
                        <form action="{{ route('gudang.data.save') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="namaBarang">Nama Produk :</label>
                                <input type="text" class="form-control" name="name" id="namaBarang" >
                            </div>
                            <div class="form-group">
                                <label for="hargaBarang">Harga Produk :</label>
                                <input type="number" class="form-control" name="price" id="hargaBarang" >
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Jumlah Produk :</label>
                                <input type="number" class="form-control" name="stock" id="jumlahBarang" >
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarang">Tanggal Kadaluarsa :</label>
                                <input type="date" class="form-control" name="tgl_kadaluarsa" id="jumlahBarang" >
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                                <a href="{{route('gudang.index')}}" class="btn btn-primary">Kembali</a>
                            </div>

                        </form>
                        <div id="responseMessage" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
    </script> -->
</x-app-layout>



