    <!-- Dashboard Summary -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Toko Pak Jayusman') }}
        </h2>
    </x-slot>
    @php
        $total_penjualan = 0;
        $total_karyawan = 0;
        foreach($transactionItem as $items){
            $total_penjualan += $items->price;
        }

        foreach($user as $users){
            $total_karyawan += 1;
        }


    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Penjualan</h2>
                            <p class="text-gray-700 text-3xl font-semibold before:content-['Rp']"> {{number_format($total_penjualan, 2, ",", ".")}}</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Total Karyawan</h2>
                            <p class="text-gray-700 text-3xl font-semibold">{{$total_karyawan}}</p>
                        </div>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Sales Report</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Date</th>
                                    <th class="px-4 py-2">Product Name</th>
                                    <th class="px-4 py-2">Quantity Sold</th>
                                    <th class="px-4 py-2">Total Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">2025-01-01</td>
                                    <td class="border px-4 py-2">Product A</td>
                                    <td class="border px-4 py-2">10</td>
                                    <td class="border px-4 py-2">$1000</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">2025-01-02</td>
                                    <td class="border px-4 py-2">Product B</td>
                                    <td class="border px-4 py-2">5</td>
                                    <td class="border px-4 py-2">$500</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold mb-4">Team Performance</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Employee Name</th>
                                    <th class="px-4 py-2">Role</th>
                                    <th class="px-4 py-2">Sales</th>
                                    <th class="px-4 py-2">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Agus</td>
                                    <td class="border px-4 py-2">Sales Associate</td>
                                    <td class="border px-4 py-2">Rp2000.000</td>
                                    <td class="border px-4 py-2">4.7</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="border px-4 py-2">Najib</td>
                                    <td class="border px-4 py-2">Cashier</td>
                                    <td class="border px-4 py-2">Rp1500.000</td>
                                    <td class="border px-4 py-2">4.8</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
