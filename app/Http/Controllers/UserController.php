<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construc()
    {
        # code...
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'address' => ['required', 'max:255'],
            'phone' => ['required'],
        ]);

        User::create(array_merge($attributes, [
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'terms_accepted' => random_int(0, 1),
            'remember_token' => Str::random(10),
        ]));

        return redirect('users')->with('success', 'New user is created');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')->ignore($user->id)],
            'address' => ['required', 'max:255'],
            'phone' => ['required'],
        ]);

        $user->update($attributes);

        return redirect('users')->with('success', 'Targeted user is updated');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users')->with('success', 'Targeted user is deleted');
    }
}
