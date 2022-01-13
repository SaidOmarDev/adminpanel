<x-layout>
    <div class="card">
        <div class="card-header">
            Create task
        </div>
        <div class="card-body">
            <form action="/tasks" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                    @error('description')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline">
                    @error('deadline')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="user" class="form-label">Assigned user</label>
                    <select class="form-select" name="user_id" id="user">
                        @php
                            $users = \App\Models\User::all();
                        @endphp
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="client" class="form-label">Assigned client</label>
                    <select class="form-select" name="client_id" id="client">
                        @php
                            $clients = \App\Models\Client::all();
                        @endphp
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->contact_name }}</option>
                        @endforeach
                    </select>
                    @error('client_id')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="project" class="form-label">Assigned project</label>
                    <select class="form-select" name="project_id" id="project">
                        @php
                            $projects = \App\Models\Project::all();
                        @endphp
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->title }}</option>
                        @endforeach
                    </select>
                    @error('project_id')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status_id" id="status">
                        @php
                            $statuses = \App\Models\Status::all();
                        @endphp
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                    @error('status_id')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
</x-layout>
