<link href="css/button.css" rel="stylesheet" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Room</th>
                                <th scope="col">Avaible Room</th>
                                <th scope="col">Facility</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->roomtype }}</td>
                                <td>{{ $item->avaibleroom }}</td>
                                <td>{{ $item->facility }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-success">Add Room</button>
                            </td>
                          </tr>

                            @endforeach
                        </tbody>
                      </table> --}}
                </div>
                ngang ngong
            </div>
        </div>
    </div>
</x-app-layout>
