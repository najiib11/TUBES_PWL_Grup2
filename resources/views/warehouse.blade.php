<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col">
                    <div class="py-2 bg-green-400 text-md font-bold self-end rounded-lg hover:bg-green-500">
                        <a href="{{ route('gudang.input')}}" class="px-5 py-2">Tambah Produk</a>
                     </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 pt-2">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Items</h2>
                            <p class="text-gray-700 text-3xl font-semibold">1,500</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Low Stock Items</h2>
                            <p class="text-gray-700 text-3xl font-semibold">20</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Pending Orders</h2>
                            <p class="text-gray-700 text-3xl font-semibold">35</p>
                        </div>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Inventory Report</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-center">
                                    <th class="px-4 py-2">Item Name</th>
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">Stock</th>
                                    <th class="px-4 py-2">Reorder Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Product A</td>
                                    <td class="border px-4 py-2">Category 1</td>
                                    <td class="border px-4 py-2">100</td>
                                    <td class="border px-4 py-2">50</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Product B</td>
                                    <td class="border px-4 py-2">Category 2</td>
                                    <td class="border px-4 py-2">75</td>
                                    <td class="border px-4 py-2">30</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-4">Assigned Tasks</h2>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Check and update stock levels</li>
                            <li>Prepare orders for shipping</li>
                            <li>Organize warehouse layout</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
