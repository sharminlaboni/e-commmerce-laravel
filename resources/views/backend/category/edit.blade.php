<x-backend.master>
    <x-slot name="title">
        Categories edit
    </x-slot>
    <div style="margin-bottom: 170px;">
        <div class="my-3 mx-5  py-5 px-5">
            <div class="row mb-2">
                <div class="col-5">
                    <h2>Categories Update</h2>
                </div>
                <div class="col-7 float-end">
                    <a class="btn btn-outline-primary my-2 float-end" href="{{ route('categories.index') }}"><i class="bi bi-card-list"></i> List</a>
                </div>
            </div><hr>

            <x-form.errors />

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('patch')

                <div class="my-3">
                    <x-form.input name="title" type="text" label="Title" :value="old('title', $category->title)" />
                </div>

                <button type="submit" class="btn btn-primary btn-outline-light border-primary">Submit</button>
            </form>
        </div>
    </div>
</x-backend.master>