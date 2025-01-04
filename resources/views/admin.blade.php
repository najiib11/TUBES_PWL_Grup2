<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-2">Managemen Pengguna</h2>
        <p class="text-gray-700">Manager, role, dan izin.</p>
        <a href="#" class="text-blue-500 mt-4 inline-block">Go to Managemen Pengguna</a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-2">Laporan</h2>
        <p class="text-gray-700">Tampilkan Laporan dan Analitik secara rinci</p>
        <a href="#" class="text-blue-500 mt-4 inline-block">Lihat Laporan</a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-2">Pengaturan</h2>
        <p class="text-gray-700">Konfigurasi pengaturan dan konferensi Sistem</p>
        <a href="#" class="text-blue-500 mt-4 inline-block">Pergi Ke Pengaturan</a>
    </div>
</div>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Data Produk</h2>
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
        </form>
        <div id="responseMessage" class="mt-3"></div>
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
</body>
</html>
