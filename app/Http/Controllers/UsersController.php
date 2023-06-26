<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('dashboard.pages.users.users', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.users.pages.create', [
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => password_hash($validatedData['password'], PASSWORD_DEFAULT),
        ])->assignRole($request->role);

        return redirect()->to('users')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('dashboard.pages.users.pages.edit', [
            'data' => $data,
            'roles' => Role::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        // User::where('id', $id)->update($validatedData)->syncRoles($request->role);
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        (request('role')) ? $user->syncRoles(request('role')) : 'Means not user';
        $user->save();

        return redirect()->to('users')->with('edit', 'User berhasil diubah');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect()->to('users')->with('delete', 'User berhasil dihapus');
    }
}