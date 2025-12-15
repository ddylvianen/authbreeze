<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="table-auto md:table-fixed">
                        <caption>lijst van gebruikers</caption>
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>email</th>
                                <th>rol</th>
                                <th>acties</th>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $usr) --}}
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
