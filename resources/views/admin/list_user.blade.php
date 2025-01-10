<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
<<<<<<< HEAD
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <body class="bg-gray-100 p-6">

                        <!-- Tombol Tambah -->
                        <div class="mb-4 text-right">
                          <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Tambah User
                          </button>
=======
            {{ __('Dashboard')   }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    <body class="bg-gray-100 p-6">
                    @if(!empty(session("success-edit")))
                        <div id="flash" class="bg-green-200 text-green-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('success-edit') }}</div>
                    @endif
                    @if(!empty(session("success-delete")))
                        <div id="flash" class="bg-green-200 text-green-700 text-lg font-bold text-center transition-opacity duration-1000 py-2">{{ session('success-delete') }}</div>
                    @endif
                    <script>
                      let getFlash = document.getElementById("flash");
                        setTimeout(() => {
                            getFlash.classList.toggle("opacity-0");
                        }, 4000);
                    </script>
                        <!-- Tombol Tambah -->
                        <div class="mb-4 mt-3 text-right flex gap-10 justify-end">
                          <a href="{{route('admin.input') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                              Tambah User
                          </a>
                          <a href="{{route('admin.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                              Kembali
                          </a>
                          
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90
                        </div>

                        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                          <table class="min-w-full table-auto">
                            <thead>
                              <tr class="bg-gray-200">
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">No ID</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Status</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Sales</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">001</td>
                                <td class="px-4 py-2 text-sm text-green-600">Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">Asep</td>
                                <td class="px-4 py-2 text-sm text-gray-800">150</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                  <button class="bg-yellow-500 text-white px-2 py-1 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </button>
                                  <button class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                    Hapus
                                  </button>
                                </td>
                              </tr>
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">002</td>
                                <td class="px-4 py-2 text-sm text-red-600">Tidak Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">Budi</td>
                                <td class="px-4 py-2 text-sm text-gray-800">120</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                  <button class="bg-yellow-500 text-white px-2 py-1 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </button>
                                  <button class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                    Hapus
                                  </button>
                                </td>
                              </tr>
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">003</td>
                                <td class="px-4 py-2 text-sm text-green-600">Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">Chandra</td>
                                <td class="px-4 py-2 text-sm text-gray-800">200</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                  <button class="bg-yellow-500 text-white px-2 py-1 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </button>
                                  <button class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                    Hapus
                                  </button>
                                </td>
                              </tr>
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">004</td>
                                <td class="px-4 py-2 text-sm text-green-600">Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">Dian</td>
                                <td class="px-4 py-2 text-sm text-gray-800">180</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                  <button class="bg-yellow-500 text-white px-2 py-1 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </button>
                                  <button class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                    Hapus
                                  </button>
                                </td>
                              </tr>
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">005</td>
                                <td class="px-4 py-2 text-sm text-red-600">Tidak Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">Edo</td>
                                <td class="px-4 py-2 text-sm text-gray-800">90</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                  <button class="bg-yellow-500 text-white px-2 py-1 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </button>
                                  <button class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                    Hapus
                                  </button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </body>
=======
                              @foreach($staf as $key => $stafs)
                              <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">{{$loop->iteration}}</td>
                                <td class="px-4 py-2 text-sm text-green-600">Aktif</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{$stafs->user->name ?? 'Unknown'}}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{$stafs->penjualan ?? "???"}}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
            
                                  <a href="{{route('admin.edit', $stafs->id)}}" class="bg-yellow-500 text-white px-3 py-2 rounded-md hover:bg-yellow-600 mr-2">
                                    Edit
                                  </a>
                                  <a id="btn-delete-{{$loop->iteration}}" class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600 hover:cursor-pointer">
                                    Hapus
                                  </a>
                                </td>
                              </tr>
                              <div class="flex justify-center">
                                <div id="notif-hapus-{{$loop->iteration}}" class="h-0 w-0 bg-white px-20 py-3 border shadow-xl rounded-lg border-shadow absolute -translate-y-20 transition-transform duration-500 flex flex-col items-end gap-7 opacity-0">
                                  <div>Apakah anda ingin menghapus data dengan nama <span class="font-bold">{{$stafs->user->name}}</span></div>
                                  <div class="flex items-center gap-5">
                                    <div id="btn-tidak-{{$loop->iteration}}" class="bg-red-500 rounded-lg font-bold hover:bg-red-700 hover:text-white text-white hover:cursor-pointer">
                                      <div class="px-4">Tidak</div>
                                    </div>
                                    <div class="bg-green-500 rounded-lg font-bold hover:bg-green-700 text-white">
                                      <a href="{{route('admin.delete', $stafs->id)}}" class="px-4 py-2">Ya</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <script>
                                document.getElementById("btn-delete-{{$loop->iteration}}").addEventListener("click", function(){
                                  let getNotif = document.getElementById("notif-hapus-{{$loop->iteration}}");
                                  getNotif.classList.toggle("h-0");
                                  getNotif.classList.toggle("w-0");
                                  getNotif.classList.toggle("-translate-y-20");
                                  getNotif.classList.toggle("-translate-y-52");
                                  getNotif.classList.toggle("opacity-0");
                                });
                                document.getElementById("btn-tidak-{{$loop->iteration}}").addEventListener("click", function(){
                                  let getNotif = document.getElementById("notif-hapus-{{$loop->iteration}}");
                                  getNotif.classList.toggle("-translate-y-52");
                                  getNotif.classList.toggle("-translate-y-20");
                                  setTimeout(() => {
                                    getNotif.classList.toggle("opacity-0");
                                    getNotif.classList.toggle("h-0");
                                    getNotif.classList.toggle("w-0");
                                  }, 600);
                                })
                              </script>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        
                      </body>
                      
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90

                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
    <script>
      // let getNotif = document.getElementById("notif-hapus");
      
    </script>
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90
</x-app-layout>

