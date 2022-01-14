<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['user', 'client', 'status'])->filter(request(['search', 'status']))->paginate(10)->withQueryString();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        Task::create($request->all());

        return redirect('tasks')->with('success', 'New task is created');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->all());

        return redirect('tasks')->with('success', 'Targeted task is updated');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('tasks')->with('success', 'Targeted task is deleted');
    }
}
