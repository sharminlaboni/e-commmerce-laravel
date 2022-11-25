<x-backend.master>
  <x-slot name="title">
    Brand Update
  </x-slot>

    <div class="my-3 mx-5  py-5 px-5">
      <div class="row mb-2">
        <div class="col-5">
          <h2>Brand Update</h2>
        </div>
        <div class="col-7 float-end">
          <a class="btn btn-outline-primary my-2 float-end" href="{{ route('brands.index') }}"><i class="bi bi-card-list"></i> List</a>
        </div>
      </div>
      <hr>

      <form action="{{route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <input type="hidden" value="" name="id">

        <x-form.input name="name" type="text" placeholder="Enter name" label="brand name" :value="$brand->name" />

        <button type="submit" class="btn btn-primary btn-outline-light border-primary my-3">Submit</button>
      </form>
    </div>
</x-backend.master>