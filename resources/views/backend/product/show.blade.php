<x-backend.master>
    <x-slot name="title">
        Medicine show
    </x-slot>

    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Medicine Show </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('products.index') }}"><i class="bi bi-card-list"></i> List</a>
                <a class="btn btn-outline-warning my-2 float-end mx-1" href="{{ route('products.edit', $product->id) }}">Update</a>
            </div>
        </div>
        <hr>

        <table claas="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>brand_name</th>
                    <th>price</th>
                    <th>sold</th>
                    <th>stock</th>
                    <th>category_name</th>
                    <th>picture</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{$product->brand?->name}}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->sold }}</td>
                    <td>{{ $product->stock}}</td>
                    <td>{{$product->category?->title }}</td>
                    <td><img src="{{asset('storage/products/'.$product->image)}}" height="140" /></td>

                </tr>
            </tbody>
        </table>
    </div>

</x-backend.master>