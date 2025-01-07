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
                    <body class="bg-gray-100 p-6">

                        <!-- Tombol Tambah -->
                        <div class="mb-4 text-right">
                          <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Tambah User
                          </button>
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

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

