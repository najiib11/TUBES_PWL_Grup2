<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <div class="row-start-1 col-span-full py-2  px-10">
                        <div class="bg-white p-20 shadow-xl border-t border-slate-100">
                        @if(!empty(session("success")))
                            <div id="flash" class="bg-green-200 text-green-600 py-4 mb-2 text-lg font-bold text-center transition-opacity duration-1000">{{ session("success") }}</div>
                        @endif
                        <script>
                            let getFlash = document.getElementById("flash");
                            setTimeout(() => {
                                getFlash.classList.toggle("opacity-0");
                            }, 4000);
                        </script>
                            <div class="grid grid-cols-6 grid-rows-2 justify-center items-center gap-5">
                            @foreach($product as $products)
                            <div class="bg-white shadow-lg p-3 hover:-translate-x-5 hover:-translate-y-5 transition-transform duration-400">
                                <div class="bg-white p-1 shadow-md">
                                    <div class="flex flex-col shadow-2xl">
                                        <div id="gambar-produk" class="">
                                            <img class="object-contain bg-white" src="{{@asset('storage/images/kapalapi.jpg')}}" alt="">
                                        </div>
                                        <div id="name-produk" class="text-center py-3">{{$products->name}}</div>
                                        <div id="total-produk" class="py-1 text-center bg-green-500 text-white rounded-lg">
                                            <a href="{{route('pembeli.input', [$products->name, $products->price, $products->stock])}}" class="py-4 px-4">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>