<x-backend.master>
    <x-slot name="title">
        User change role
    </x-slot>
    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>User Change Role </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('users.index') }}"><i class="bi bi-card-list"></i> List</a>
            </div>
        </div><hr>

        <x-form.errors />

        <form action="{{ route('users.update_role', $user->id) }}" method="post">
            @csrf
            @method('patch')

            <x-form.select name="role_id" required label="Role" :options="$roles" />

            <button type="submit" class="btn btn-primary btn-outline-light border-primary">Submit</button>
        </form>
    </div>

</x-backend.master>