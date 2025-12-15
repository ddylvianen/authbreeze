<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-xs font-semibold text-gray-600 uppercase text-left">Naam
                            </th>
                            <th class="px-4 py-3 text-xs font-semibold text-gray-600 uppercase text-left">email</th>
                            <th class="px-4 py-3 text-xs font-semibold text-gray-600 uppercase text-left">rolnaam</th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-800">{{ $user->naam }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $user->email }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $ }}</td>
                                <td class="px-4 py-3 text-right">
                                    <button class="text-blue-600 hover:text-blue-900">wijzig</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    </div>
</x-app-layout>
