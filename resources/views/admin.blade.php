<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Managemen Pengguna</h2>
                            <p class="text-gray-700">Manager, role, dan izin.</p>
                            <a href="{{ route('admin.list')}}" class="text-blue-500 mt-4 inline-block">Go to Managemen Pengguna</a>
                        </div>

                        <!-- <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Laporan</h2>
                            <p class="text-gray-700">Tampilkan Laporan dan Analitik secara rinci</p>
                            <a href="{{ route('admin.laporan')}}" class="text-blue-500 mt-4 inline-block">Lihat Laporan</a>
                        </div> -->

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Pengaturan Akun</h2>
                            <p class="text-gray-700">Konfigurasi pengaturan akun</p>
                            <a href="{{route('admin.profile.index')}}" class="text-blue-500 mt-4 inline-block">Pergi Ke Pengaturan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


