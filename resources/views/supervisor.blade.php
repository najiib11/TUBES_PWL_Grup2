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
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Daily Sales</h2>
                            <p class="text-gray-700 text-3xl font-semibold">$5,000</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Team Members</h2>
                            <p class="text-gray-700 text-3xl font-semibold">10</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-xl font-bold mb-2">Tasks Completed</h2>
                            <p class="text-gray-700 text-3xl font-semibold">8</p>
                        </div>
                    </div>


                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <h2 class="text-xl font-bold mb-4">Daily Report</h2>
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
                                    <td class="border px-4 py-2">7</td>
                                    <td class="border px-4 py-2">$700</td>
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
                        <h2 class="text-xl font-bold mb-4">Assigned Tasks</h2>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Check inventory levels and reorder if necessary</li>
                            <li>Prepare daily sales report</li>
                            <li>Monitor team performance and provide feedback</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
