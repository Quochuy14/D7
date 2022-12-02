@extends('dashboard')

@section('account')
    <div>
        <!-- component -->
        <div class="text-gray-900">
            <div class="p-4 flex">
                <h1 class="text-3xl">
                    Users
                </h1>
            </div>
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-gray-300 shadow-md mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </th>
                            <th class="text-left p-3 px-5">Name</th>
                            <th class="text-left p-3 px-5">Email</th>
                            <th class="text-left p-3 px-5">Status</th>
                            <th class="text-left p-3 px-5">Role</th>
                            <th></th>
                        </tr>
                        <tr class="border-b hover:bg-gray-100 bg-white">
                            <td class="p-3 px-5">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-3 px-5">Username</td>
                            <td class="p-3 px-5">FullName</td>
                            <td class="p-3 px-5">
                                <span class="relative top-0.5 inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                <span>online</span>
                            </td>
                            <td class="p-3 px-5">huyquoc</td>
                            <td class="p-3 px-5 flex justify-end"><button type="button"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button
                                    type="button"
                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100 bg-white">
                            <td class="p-3 px-5">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="p-3 px-5">Username</td>
                            <td class="p-3 px-5">FullName</td>
                            <td class="p-3 px-5">
                                <span class="relative top-0.5 inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                                <span>offline</span>
                            </td>
                            <td class="p-3 px-5">huyquoc</td>
                            <td class="p-3 px-5 flex justify-end"><button type="button"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button
                                    type="button"
                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
