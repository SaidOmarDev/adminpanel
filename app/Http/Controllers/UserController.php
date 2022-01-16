<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construc()
    {
        # code...
    }

    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        User::create(array_merge($request->validated(), [
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

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        return redirect('users')->with('success', 'Targeted user is updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users')->with('success', 'Targeted user is deleted');
    }
}
