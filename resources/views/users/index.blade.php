<x-layout>
    <x-buttons.create :text="'user'" />
    <div class="card">
        <div class="card-header">
            Users list
        </div>
        <div class="card-body">
            @if ($users->count() > 0)
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="d-flex justify-content-between py-3">
                                <a href="users/{{ $user->id }}/edit" class="btn btn-edit">edit</a>
                                <form action="/users/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
            @else
                <p class="text-center my-4">We don't have any users agreed with your choice...</p>
            @endif
        </div>
    </div>
</x-layout>
