<?php

namespace App\Http\Controllers;

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

    public function store()
    {
        $attributes = request()->validate([
            'contact_name' => ['required'],
            'contact_email' => ['required', 'unique:clients,contact_email'],
            'contact_phone' => ['required'],
            'company_name' => ['required'],
            'company_address' => ['required'],
            'company_city' => ['required'],
            'company_zip' => ['required'],
            'company_vat' => ['required']
        ]);

        Client::create($attributes);

        return redirect('clients')->with('success', 'New client is created');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $attributes = request()->validate([
            'contact_name' => ['required'],
            'contact_email' => ['required', Rule::unique('clients', 'contact_email')->ignore($client->id)],
            'contact_phone' => ['required'],
            'company_name' => ['required'],
            'company_address' => ['required'],
            'company_city' => ['required'],
            'company_zip' => ['required'],
            'company_vat' => ['required']
        ]);

        $client->update($attributes);

        return redirect('clients')->with('success', 'Targeted client is updated');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('clients')->with('success', 'Targeted client is deleted');
    }
}
