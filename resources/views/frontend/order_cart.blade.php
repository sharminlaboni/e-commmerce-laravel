<x-frontend.master>
    <x-slot name="title">
        order cart Home
    </x-slot>

    <div aria-label="breadcrumb" style="background-color: rgb(212, 221, 220);">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}"
                    style="text-decoration: none; margin-left: 30px;">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/product_details') }}" style="text-decoration: none;">Details</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>

    <main>
        <table class="table table-striped table-hover item-table" style="width: 100%;">
            <thead class="text-center">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>
                            <div class="input-group" style="max-width: 150px;">
                                <input type="number" class="form-control text-center user-input"
                                    value="{{ $item->qty }}">
                            </div>
                        </td>
                        <td>0</td>
                        <td>
                            <form action="{{ route('frontend.delete_cart_item', $item->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn" style="font-size: 20px;"><i
                                        class="fa-solid fa-trash-can text-danger"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

        <div class="row my-4 mx-1">
            <div class="col-6" style="padding-left: 125px;">
                <p><a href="{{ url('/home') }}"
                        class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info mx-5 my-2">UPDATE CART</a>
                    <a href="{{ url('/home') }}"
                        class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info my-2">CONTINUE SHOPPING</a>
                </p>
                <div style="padding-left: 45px;">
                    <h3>Coupon</h3>
                    <p>Enter your coupon code if you have one.</p>
                </div>
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2" style="padding-left: 25px;">
                        <label for="number"></label>
                        <input type="number" class="number" id="number" placeholder="Coupon code"
                            style="padding: 6px; margin-top: 2px;">
                        <button type="submit"
                            class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info ml-5">APPLY
                            COUPON</button>
                    </div>
                </form>
            </div>

            <div class="col-5">
                <table class="table table-dark text-center mt-2 total-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>CART TOTALS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td class="text-center">৳1750</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td class="text-center total-price">1750</td>
                        </tr>
                    </tbody>

                </table>
                <div class="text-center">
                    <a href="{{ route('frontend.checkout') }}"
                        class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info my-3">PROCEED TO
                        CHECKOUT</a>
                </div>
            </div>
        </div>

    </main>
    @push('js')
        <script src="{{ asset('frontend/js/joycart.js') }}"></script>
    @endpush
</x-frontend.master>
