<x-backend.master>
    <div class="conatainer">
        <h3 class="d-inline">ID:</h3>
        <p class="d-inline">{{ $order->id }}</p>
        <br>
        <h3 class="d-inline">Invoice Number</h3>
        <p class="d-inline">{{ $order->invoice_number }}</p>
        <br>
        <h3 class="d-inline">Shipping Address</h3>
        <p class="d-inline">{{ $order->shipping_address }}</p>
        <br>
        <h3 class="d-inline">Contact Number</h3>
        <p class="d-inline">{{ $order->contact_number }}</p>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_details as $item)
                    <tr>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->unit_price }}</td>
                        <td>{{ $item->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-backend.master>
