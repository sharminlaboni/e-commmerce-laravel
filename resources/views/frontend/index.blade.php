<x-frontend.master>
    <x-slot name="title">
        Home
    </x-slot>

    <main>
        <div class="bg-image d-flex justify-content-center align-items-center mb-5">
            <div class="text-light text-center font-weight-bold">
                <h5>EFFECTIVE MEDICINE, NEW MEDICINE EVERYDAY</h5>
                <h1 style="font-size: 70px;">WELCOME TO <br> PHARMA</h1><br>
                <a href="../Saiful/product_list.html" class="btn btn-info btn-outline-light px-5 py-3">SHOP NOW</a>
            </div>
        </div>


        <section>
            <div class="PopularProduction text-center m-5">
                <h2 id="PopularProduct">POPULAR PRODUCTS</h2>
            </div>

            <div class="row m-5 p-5 bg-light">
                @foreach ($popularProducts as $product)
                <div class="col-lg-3 col-md-3 col-sm-3 mb-3">
                    <div class="card text-center" style="width: 16rem;">
                        <a href="{{ route('frontend.products.details', $product->id) }}">
                            <img src="{{ $product->image }}" class="card-img-top" style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 20px;">{{ $product->name }}</p>
                            <h4 class="card-title">৳{{ $product->price }}</h4>
                            @auth
                            <a href="{{ route('frontend.add_to_cart', [$product->id]) }}" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="ViewProducts text-center pb-5">
                <a href="#" class="btn btn-info btn-outline-dark px-5 py-3 text-light">VIEW ALL PRODUCTS</a>
            </div>

            <div class="NewProducT text-center m-5">
                <h2 id="NewProduction">NEW PRODUCTS</h2>
            </div>

            <div class="row m-5 p-5 bg-light">
                @foreach ($newProducts as $product)
                <div class="col-lg-3 col-md-3 col-sm-3 mb-3">
                    <div class="card text-center" style="width: 16rem;">
                        <a href="{{ route('frontend.products.details', $product->id) }}">
                            <img src="{{ $product->image }}" class="card-img-top" style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 20px;">{{ $product->name }}</p>
                            <h4 class="card-title">৳{{ $product->price }}</h4>
                            @auth
                                <a href="{{ route('frontend.add_to_cart', [$product->id]) }}" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>

        <div class="DevelopedByPixel text-center mt-5">
            <h1>DEVELOPED BY PIXEL</h1>
        </div>
        <div class="row m-5 p-5">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="{{ url('/frontend/image/Sanny.jpg') }}" style="height: 80px; width: 100px; border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Eius quae reiciendis distinctio
                    voluptates sed dolorum excepturi
                    iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Md Saiduzzaman</p>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="{{ url('/frontend/image/mehedi.jpg') }}" style="height: 80px; width: 100px; border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Eius quae reiciendis distinctio
                    voluptates sed dolorum excepturi
                    iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Mohd Mehedi Hasan Joy</p>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="{{ url('/frontend/image/saiful.jpg') }}" style="height: 80px; width: 100px; border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Eius quae reiciendis distinctio
                    voluptates sed dolorum excepturi
                    iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Saiful Jhony</p>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="{{ url('/frontend/image/sarmin.jpg') }}" style="height: 80px; width: 100px; border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Eius quae reiciendis distinctio
                    voluptates sed dolorum excepturi
                    iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Sharmin Akter Laboni</p>
            </div>
        </div>
    </main>
</x-frontend.master>
