<x-backend.master>
    <div class="m-2 p-2">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2" style="text-align:center;">user List</h1>
            </div>

            @if(session('message'))
                <span class="text-success h4">{{ session('message') }}</span>
            @endif

            <table class="table text-center">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('users.show', $user->id) }}">Show</a>
                            @can('update-role')
                            <a class="btn btn-sm btn-warning" href="{{ route('users.change_role', $user->id) }}">Change Role</a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="m-3  p-3">
            {{ $users->links() }}
        </div>
    </div>
</x-frontend.master>