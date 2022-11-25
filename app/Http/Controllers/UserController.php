<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->latest()->paginate(5);
        return view('backend.user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }

    public function changeRole(User $user)
    {
        $this->authorize('update-role');
        $roles = Role::pluck('name', 'id')->toArray();
        return view('backend.user.change_role', compact('roles', 'user'));
    }

    public function updateRole(Request $request, User $user)
    {
        $user->update([
            'role_id' => $request->role_id
        ]);
        return redirect()->route('users.index')->withMessage('Successfully updated role!');
    }
}
