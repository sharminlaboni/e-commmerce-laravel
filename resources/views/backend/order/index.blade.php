<x-backend.master>
    <x-slot name="title">
        Order list
    </x-slot>
    <div class="my-3 py-3 mx-2">

        @if (session('message'))
        <span class="text-success h4">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Order List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href=""><i class="bi bi-plus"></i> Add</a>
                <a class="btn btn-outline-danger my-2 float-end mx-1" href=""> Trash </a>
                <a class="float-end" href="">
                    <button type="button" class="btn btn-outline-secondary my-2">PDF</button>
                </a>
                <a class="float-end mx-1" href="">
                    <button type="button" class="btn btn-outline-secondary my-2 float-right">Excel</button>
                </a>
            </div>
        </div><hr>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Invoice ID</th>
                    <th>Shipping Address</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->invoice_number }}</td>
                    <td>{{ $order->shipping_address }}</td>
                    <td>{{ $order->contact_number }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('orders.show', $order->id) }}">Show</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-backend.master>
