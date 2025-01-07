<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <body class="bg-gray-100 p-6">

        <!-- Judul Laporan -->
        <div class="mb-8">
          <h1 class="text-3xl font-semibold text-gray-800">Laporan Pendapatan dan Target Sales</h1>
          <p class="text-gray-600 mt-2">Tahun 2025</p>
        </div>

        <!-- Laporan Pendapatan & Target -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card Pendapatan -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-medium text-gray-800">Pendapatan Bulanan</h3>
            <p class="text-3xl font-bold text-green-600 mt-4">Rp 1.200.000.000</p>
            <p class="text-sm text-gray-500 mt-2">Pendapatan bulan ini</p>
          </div>

          <!-- Card Target Sales -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-medium text-gray-800">Target Sales</h3>
            <p class="text-3xl font-bold text-blue-600 mt-4">Rp 1.500.000.000</p>
            <p class="text-sm text-gray-500 mt-2">Target yang harus dicapai</p>
          </div>

          <!-- Card Persentase Pencapaian -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-medium text-gray-800">Pencapaian (%)</h3>
            <p class="text-3xl font-bold text-yellow-500 mt-4">80%</p>
            <p class="text-sm text-gray-500 mt-2">Pencapaian target bulan ini</p>
          </div>
        </div>

        <!-- Laporan Sales per Kategori -->
        <div class="mt-8">
          <h2 class="text-2xl font-semibold text-gray-800">Laporan Sales per Kategori</h2>
          <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card Sales Produk A -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h4 class="text-lg font-medium text-gray-800">Produk A</h4>
              <p class="text-xl font-bold text-gray-700 mt-2">Rp 450.000.000</p>
            </div>

            <!-- Card Sales Produk B -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h4 class="text-lg font-medium text-gray-800">Produk B</h4>
              <p class="text-xl font-bold text-gray-700 mt-2">Rp 300.000.000</p>
            </div>

            <!-- Card Sales Produk C -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h4 class="text-lg font-medium text-gray-800">Produk C</h4>
              <p class="text-xl font-bold text-gray-700 mt-2">Rp 450.000.000</p>
            </div>
          </div>
        </div>

        

      </body>
</x-app-layout>
