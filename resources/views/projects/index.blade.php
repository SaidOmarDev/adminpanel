<x-layout>
    <x-buttons.create :text="'project'"/>
    <div class="card">
        <div class="card-header">
            Projects list
        </div>
        <div class="d-flex justify-content-between m-4">
            <form method="GET" action="" class="search-form">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                </div>
            </form>
            <div class="dropdown status-dropdown">
                @php
                    $statuses = \App\Models\Status::all();
                @endphp
                Status:
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ request('status') ? request('status') : 'All' }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/projects">All</a></li>
                    @foreach ($statuses as $status)
                        <li><a class="dropdown-item" href="/projects?status={{ $status->name }}">{{ $status->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body">
            @if ($projects->count() > 0)
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
                            <td>{{ $project->status->name }}</td>
                            <td class="d-flex justify-content-between py-3">
                                <a href="projects/{{ $project->id }}/edit" class="btn btn-edit">edit</a>
                                @admin
                                    <form action="/projects/{{ $project->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                @endadmin
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $projects->links() }}
            @else
                <p class="text-center my-4">We don't have any projects agreed with your choice...</p>
            @endif
        </div>
    </div>
</x-layout>
