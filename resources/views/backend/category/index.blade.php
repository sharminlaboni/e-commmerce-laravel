<x-backend.master>
    <x-slot name="title">
        Categories list
    </x-slot>

    <div class="my-3 mx-5 py-3 px-5">
    
        @if (session('message'))
            <span class="text-success h3">{{ session('message') }}</span>
        @endif

        <div class="row mb-2">
            <div class="col-5">
                <h2>Categories List </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('categories.create') }}"><i class="bi bi-plus"></i> Add</a>
                <a class="btn btn-outline-danger my-2 float-end mx-1" href="{{ route('categories.trash') }}"> Trash </a>
            </div>
        </div><hr>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Title</th>
                    <th width="300">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->title }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('categories.show', $category->id) }} ">Show</a>
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }} "> Edit </a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to Delete')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-backend.master>