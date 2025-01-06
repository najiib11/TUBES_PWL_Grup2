<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row-start-1 col-span-full py-20 px-60">
                        <div class="bg-white p-20 shadow-xl border-t border-slate-100">
                            <div class="flex flex-col justify-center item-center px-20">
                                <div id="form" class="flex flex-col">
                                    <form action="{{ route(substr(request()->route()->getPrefix(), 1, strlen(request()->route()->getPrefix()) - 1).'profile.save') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex flex-col gap-10 items-center">
                                            <label for="name"> Nama Pengguna
                                                <br><input type="text" name="nama" id="name" class="mb-14 px-[85px] shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            @error("name")
                                                <span class="px-10 py-3 bg-red-200 text-red-600">{{ $message }}</span>
                                            @enderror
                                            <label for="gambarUrl"> Gambar
                                                <br><input type="file" name="gambarUrl" id="gambarUrl" accept="image/png, image/jpeg, image/jpg" class="shadow w-[220px]" >
                                            </label>
                                            @error("gambarUrl")
                                                <span class="px-10 py-3 bg-red-200 text-red-600">{{ $message }}</span>
                                            @enderror
                                            <div class="p-5">
                                                <div class="py-10">
                                                    <img class="object-contain" src="" alt="" id="gambar">
                                                </div>
                                            </div>
                                            <div id="btn" class="text-center bg-green-400 hover:bg-green-700 text-lg font-bold py-1 rounded-lg">
                                                <input type="submit" value="Simpan Perubahan" class="px-16 py-2">
                                            </div>
                                            <div id="btn-back" class="pt-10 text-md text-blue-500 hover:font-bold before:content-['<<<'] justify-self-end">
                                                <a href="{{route(substr(request()->route()->getPrefix(), 1, strlen(request()->route()->getPrefix()) - 1).'profile.index')}}"> Kembali</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <script>
                            let getFile = document.getElementById("gambarUrl");
                            let getGambar = document.getElementById("gambar");
                            getFile.addEventListener("change", function(event){
                                const file = event.target.files[0];
                                const reader = new FileReader();
                                reader.onload = function (e){
                                    getGambar.src = e.target.result;
                                }
                                reader.readAsDataURL(file);

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
