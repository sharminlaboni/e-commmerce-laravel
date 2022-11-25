<x-backend.master>
    <x-slot name="title">
        Categories show
    </x-slot>
    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Categories Show </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('categories.index') }}"><i class="bi bi-card-list"></i> List</a>
                <a class="btn btn-outline-warning my-2 float-end mx-1" href="{{ route('categories.edit', $category->id) }}">Update</a>
            </div>
        </div><hr>

        <h3 style="margin-bottom: 0%;">Title: {{ $category->title }}</h3>
    </div>
    </div>

</x-backend.master>