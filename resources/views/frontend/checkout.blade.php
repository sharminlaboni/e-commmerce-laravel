<x-frontend.master>
    <x-slot name="title">
        checkout Home
    </x-slot>

    <main>
        <div class="card-registration mx-5 mt-5 p-5">
            <div class="row mx-5 bg-light">
                <div class="col-xl-12 col-md-6 col-sm-4">
                    <div class="card-body p-md-5 text-black">
                        <h3 class="mb-5 text-uppercase text-center">Billing Details</h3>
                        <form action="{{ route('frontend.place_order') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="address mb-4">
                                <label class="form-label" for="address">Address</label>
                                <input name="shipping_address" type="text" id="address" class="form-control form-control-lg" />
                            </div>
                            <div class="address mb-4">
                                <label class="form-label" for="address">Contact Number</label>
                                <input name="contact_number" type="text" id="address" class="form-control form-control-lg" />
                            </div>
                            <div class="address mb-4">
                                <label for="payment_type">Payment Options</label>
                                <select name="payment_type" id="payment_type" class="form-control" disabled>
                                    <Option>Cash on Delivery</Option>
                                    <Option>Bkash</Option>
                                </select>
                            </div>
                            <button class="btn btn-info" type="submit">Place Order</button>
                            <a href="{{ route('frontend.cart') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

</x-frontend.master>
