<x-layout>
    <div class="my-3">
        <a href="tasks/create" class="btn btn-success">
            Create task
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            Tasks list
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Assigned to</th>
                        <th>Client</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->user->name }}</td>
                            <td>{{ $task->client->contact_name }}</td>
                            <td>{{ $task->deadline }}</td>
                            <td>{{ $task->status }}</td>
                            <td class="d-flex justify-content-between">
                                <a href="tasks/{{ $task->id }}/edit" class="btn btn-primary">edit</a>
                                <form action="/tasks/{{ $task->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
