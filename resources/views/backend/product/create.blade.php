<x-backend.master>
    <x-slot name="title">
        Medicine create
    </x-slot>

    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Medicine Add</h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('products.index') }}"><i class="bi bi-card-list"></i> List</a>
            </div>
        </div><hr>

        <form action="{{ route('products.store') }} " method="POST">
            @csrf

            <x-form.input type="text" name="name" placeholder="Enter name" required label="name" />
            <x-form.select name="brand_id" label="brand" :options="$brand" />
            <x-form.input type="text" name="price" placeholder="Enter price" required label="price" />
            <x-form.input type="text" name="sold" placeholder="Enter sold" required label="sold" />
            <x-form.input type="stock" name="stock" placeholder="Enter stock" required label="stock" />
            <x-form.select name="category_id" label="Category" :options="$category" />
            <x-form.input type="file" name="image" label='Picture' />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-backend.master>