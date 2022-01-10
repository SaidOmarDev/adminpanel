<x-layout>
    <div class="card">
        <div class="card-header">
            Create project
        </div>
        <div class="card-body">
            <form action="/projects" method="POST" enctype="multipart/form-data">
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
                    <select class="form-control" name="user" id="user">
                        @php
                            $users = \App\Models\User::all();
                        @endphp
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="client" class="form-label">Assigned client</label>
                    <select class="form-select" name="client" id="client">
                        @php
                            $clients = \App\Models\Client::all();
                        @endphp
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->contact_name }}</option>
                        @endforeach
                    </select>
                    @error('client')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option value="status">Status</option>
                    </select>
                    @error('status')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <input class="btn btn-primary" type="submit" value="Create">
            </form>
        </div>
    </div>
</x-layout>
