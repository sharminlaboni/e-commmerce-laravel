<x-backend.master>
    <x-slot name="title">
        Medicine trash
    </x-slot>

    <div class="my-3 mx-5 py-3 px-5">

        @if (session('message'))
        <span class="text-success h4">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Trash List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('products.index') }}"><i class="fa-solid fa-plus"></i> List</a>
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
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand?->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->sold }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category?->title }}</td>
                    <td><img src="{{asset('storage/products/'.$product->image)}}" height="140" /></td>

                    <td>
                        <a class="btn btn-sm btn-warning" onclick="return confirm('Are you sure want to Restore')" href="{{ route('products.restore', $product->id) }}"> Restore </a>
                        <form action="{{ route('products.delete', $product->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to permanently Delete')" title="Permanent Delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-backend.master>