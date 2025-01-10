<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Staf') }}
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
                                <label for="nama">Nama Staf :</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="peran">Peran Staf :</label>
                                <select name="peran" id="peran">
                                    <option value="kasir">Kasir</option>
                                    <option value="kepala_toko">Kepala Toko</option>
                                    <option value="manager_toko">Manager Toko</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="warehouse">Warehouse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="penjualan">Penjualan :</label>
                                <input type="number" class="form-control" name="penjualan" id="penjualan" required>
                            </div>

                            <div class="form-group">
                                <label for="rating">Rating :</label>
                                <input type="number" class="form-control" name="rating" id="rating" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="{{route('kepala_toko.index')}}" class="btn btn-primary">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
