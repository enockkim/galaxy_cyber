<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-20 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order['name']}}</td>
                    <td>{{$order['phoneNumber']}}</td>
                    <td>{{$order['service']}}</td>
                    <td>{{$order['description']}}</td>
                    <td>{{$order['created_at']}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </tfoot>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
