<x-layout>
    <div class="my-3">
        <a href="projects/create" class="btn btn-success">
            Create project
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            Projects list
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
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->user->name }}</td>
                            <td>{{ $project->client->contact_name }}</td>
                            <td>{{ $project->deadline }}</td>
                            <td>{{ $project->status }}</td>
                            <td class="d-flex justify-content-between">
                                <a href="projects/{{ $project->id }}/edit" class="btn btn-primary">edit</a>
                                <form action="/projects/{{ $project->id }}" method="post">
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
