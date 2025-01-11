<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('pembeli.save', $name)}}" method="GET">
                    @csrf
                    <div class="p-6 text-gray-900 flex justify-center">
                        <div class="bg-white flex flex-col gap-10 shadow-2xl p-8">
                            <div id="layout-1" class="flex gap-10 ahadow-lg">
                                <div id="gambar" class="">
                                    <img class="object-contain h-44 w-44" src="{{@asset('storage/images/night.png')}}" alt="">
                                </div>
                                <div id="layout flex flex-col items-center">
                                    <div id="nama-produk" class="py-3 text-center text-lg font-bold">{{$name}}</div>
                                    <div id="amount">
                                        <label for="jumlah">Jumlah Barang
                                            <input type="number" name="quantity" id="jumlah" required unsigned class="block font-medium text-sm text-gray-700 dark:text-gray-800">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="btn" class="bg-green-400 py-2 text-white hover:bg-gree-600 text-center">
                                <input type="submit" class="px-5 py-2" value="Pesan">
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>