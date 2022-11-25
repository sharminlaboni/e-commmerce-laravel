<x-backend.master>
    <x-slot name="title">
        Brand create
    </x-slot>
    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Brand Add</h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('brands.index') }}"><i class="bi bi-card-list"></i> List</a>
            </div>
        </div><hr>

        <x-form.errors />

        <form action="{{route('brands.store') }}" method="POST">
            @csrf

            <div class="my-3">
                <x-form.input name="name" type="text" placeholder="Enter name" label="Brand name" />
            </div>

            <button type="submit" class="btn btn-primary btn-outline-light border-primary">Submit</button>
        </form>
    </div>
</x-backend.master>