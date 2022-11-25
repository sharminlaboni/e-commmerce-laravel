<x-backend.master>
    <x-slot name="title">
        Brand show
    </x-slot>

    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Brand Show </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('brands.index') }}"><i class="bi bi-card-list"></i> List</a>
                <a class="btn btn-outline-warning my-2 float-end mx-1" href="{{ route('brands.edit', $brand->id) }}">Update</a>
            </div>
        </div>
        <hr>

        <h3 style="margin-bottom: 24%;">Title: {{ $brand->name }}</h3>
    </div>

</x-backend.master>