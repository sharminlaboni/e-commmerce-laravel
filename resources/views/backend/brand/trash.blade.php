<x-backend.master>
    <x-slot name="title">
        Categories trash
    </x-slot>

    <div class="my-3 mx-5 py-3 px-5">

        @if (session('message'))
        <span class="text-success h3">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Trash List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('brands.index') }}"><i class="fa-solid fa-plus"></i> List</a>
            </div>
        </div>
        <hr>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>name</th>
                    <th width="300">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $brand->name}}</td>

                    <td>
                        <a class="btn btn-warning" onclick="return confirm('Are you sure want to Restore')" href="{{ route('brands.restore', $brand->id) }}"> Restore </a>
                        <form action="{{ route('brands.delete', $brand->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to permanently Delete')" title="Permanent Delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

</x-backend.master>