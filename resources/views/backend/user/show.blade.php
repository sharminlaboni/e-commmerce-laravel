<x-backend.master>
    <x-slot name="title">
        User show
    </x-slot>
    <div class="my-3 mx-5  py-5 px-5">
        <div class="row mb-2">
            <div class="col-5">
                <h2>User Show </h2>
            </div>
            <div class="col-7 float-end">
                <a class="btn btn-outline-primary my-2 float-end" href="{{ route('users.index') }}"><i class="bi bi-card-list"></i> List</a>
            </div>
        </div><hr>

        <h6>Name: {{ $user->name }}</h6>
        <p>Email: {{ $user->email }}</p>
        <p>Present Address: {{ $user->profile->present_address }}</p>
    </div>
</x-backend.master>