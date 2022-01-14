<x-layout>
    <x-buttons.create :text="'client'" />
    <div class="card">
        <div class="card-header">
            Clients list
        </div>
        <div class="card-body">
            @if($clients->count() > 0)
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Company</th>
                        <th>VAT</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->company_name }}</td>
                            <td>{{ $client->company_vat }}</td>
                            <td>{{ $client->company_address }}</td>
                            <td class="d-flex justify-content-between py-3">
                                <a href="clients/{{ $client->id }}/edit" class="btn btn-edit">edit</a>
                                @admin
                                    <form action="/clients/{{ $client->id }}" method="post">
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
            {{ $clients->links() }}
            @else
                <p class="text-center my-4">We don't have any clients agreed with your choice...</p>
            @endif
        </div>
    </div>
</x-layout>
