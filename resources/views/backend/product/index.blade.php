<x-backend.master>
    <x-slot name="title">
        Medicine list
    </x-slot>

    <div class="my-3 mx-2 py-3 px-2">

        @if (session('message'))
        <span class="text-success h3">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Medicine List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('products.create') }}"><i class="bi bi-plus"></i> Add</a>
                <a class="btn btn-outline-danger my-2 float-end mx-1" href="{{ route('products.trash') }}"> Trash </a>
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
                    <th>SL#</th>
                    <th>name</th>
                    <th>brand_id</th>
                    <th>price</th>
                    <th>stock</th>
                    <th>sold</th>
                    <th>category_id</th>
                    <th>picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand?->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->sold }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category?->title }}</td>
                    <td><img src="{{asset('storage/products/'.$product?->image)}}" height="140" /></td>

                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('products.show', $product->id) }} ">Show</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}">Edit </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-backend.master>