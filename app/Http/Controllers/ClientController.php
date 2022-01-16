<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request)
    {
        Client::create($request->validated());

        return redirect('clients')->with('success', 'New client is created');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client, ClientRequest $request)
    {
        $client->update($request->validated());

        return redirect('clients')->with('success', 'Targeted client is updated');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clients')->with('success', 'Targeted client is deleted');
    }
}
