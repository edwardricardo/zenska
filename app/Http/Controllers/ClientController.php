<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients', $clients));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request)
    {
        Client::create($request->all());
        return redirect(route('clients.index'))->with('message', 'Cliente creado corectamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client', $client));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->fill($request->all());
        $client->save();
        return redirect(route('clients.index'))->with('message', 'Cliente actualizado corectamente');
    }

    public function destroy($id)
    {
        //
    }
}
