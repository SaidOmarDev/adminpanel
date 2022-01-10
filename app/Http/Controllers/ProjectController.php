<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;

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

    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect('projects')->with('success', 'New project is created');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project, ProjectRequest $request)
    {
        $project->update($request->all());

        return redirect('projects')->with('success', 'Targeted project is updated');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect('projects')->with('success', 'Targeted project is deleted');
    }
}
