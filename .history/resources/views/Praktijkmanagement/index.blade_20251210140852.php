<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table-responsive">
                    <table class="table">
                        <caption>lijst van gebruikers</caption>
                        <thead>
                            <tr>
                                <th scope="col">Naam</th>
                                <th scope="col">email</th>
                                <th scope="col">rol</th>
                                <th scope="col">acties</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $usr)
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="{{  }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="">

                                        </a>
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
