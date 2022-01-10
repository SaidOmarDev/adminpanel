<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['user', 'client'])->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // ddd(request()->all());
        $attributes = request()->validate([
            'title' => ['required', 'min:15', 'max:25'],
            'description' => ['required', 'max:255'],
            'deadline' => ['required'],
            'status' => ['required'],
            'user_id' => ['required', Rule::exists('users', 'id')],
            'client_id' => ['required', Rule::exists('clients', 'id')]
        ]);

        Project::create($attributes);

        return redirect('/')->with('success', 'New project is created');
    }
}
