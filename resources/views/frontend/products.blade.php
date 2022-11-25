<x-frontend.master>
    <x-slot name="title">
        Products
    </x-slot>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card shadow mt-3" style="width: 18rem;">
                        <a href="{{ route('frontend.products.details', $product->id) }}"><img src="{{ $product->image }}"
                                class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h5 class="card-title">Price: {{ $product->price }}৳</h5>
                            @auth
                            <a href="{{ route('frontend.add_to_cart', [$product->id]) }}" class="btn btn-light btn-outline-success" style="width: 100%;">ADD TO CART</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-light btn-outline-success" style="width: 100%;">ADD TO CART</a>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
</x-frontend.master>
