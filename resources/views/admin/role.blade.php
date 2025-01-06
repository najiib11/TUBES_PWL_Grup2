<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Page') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="py-10 text-gray-900 dark:text-gray-100 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white px-10 py-10 rounded shadow-md w-full max-w-md">
                        <form id="profileForm">
                            <div class="mb-4">
                                <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
                                <input type="text" id="username" name="username" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                                <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="role" class="block text-gray-700 font-bold mb-2">Role:</label>
                                <select id="role" name="role" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                                <div id="btn-back" class="pt-10 text-md text-blue-500 hover:font-bold before:content-['<<<'] justify-self-end">
                                    <a href="{{route('admin.index')}}"> Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
