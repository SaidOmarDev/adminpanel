<x-layout>
    <div class="my-3">
        <a href="clients/create" class="btn btn-success">
            Create client
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            Clients list
        </div>
        <div class="card-body">
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
                            <td class="d-flex justify-content-between">
                                <a href="clients/{{ $client->id }}/edit" class="btn btn-primary">edit</a>
                                <form action="/clients/{{ $client->id }}" method="post">
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
