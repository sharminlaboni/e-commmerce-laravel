<x-backend.master>
    <x-slot name="title">
        Medicine update
    </x-slot>
    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>Medicine Update</h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('products.index') }}"><i class="bi bi-card-list"></i> List</a>
            </div>
        </div><hr>

        <form action="{{ route('products.update', $product->id) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <input type="hidden" value="" name="id">

            <x-form.input type="text" name="name" placeholder="Enter name" required label="name" :value="old('name', $product->name)" />

            <x-form.select name="brand_id" label="brand" :options="$brand" />

            <x-form.input type="text" name="price" placeholder="Enter price" required label="price" :value="old('price', $product->price)" />
            <x-form.input type="text" name="sold" placeholder="Enter sold" required label="sold" :value="old('sold', $product->sold)" />
            <x-form.input type="stock" name="stock" placeholder="Enter stock" required label="stock" :value="old('stock', $product->stock)" />
            <x-form.select name="category_id" label="Category" :options="$category" />
            <x-form.input type="file" name="image" label='Picture' :value="old('image', $product->image)"/>

            <button type="submit" class="btn btn-primary btn-outline-light border-primary">Submit</button>
        </form>
    </div>
</x-backend.master>