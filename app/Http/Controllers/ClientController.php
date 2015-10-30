<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients', $clients));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        Client::create($request->all());
        return redirect(route('clients.index'))->with('message', 'Cliente creado corectamente');
    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client', $client));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->save();

        return redirect(route('clients.index'))->with('message', 'Cliente actualizado corectamente');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $name = $client->name . " " . $client->lastname;
        Client::destroy($id);
        return redirect(route('clients.index'))->with('message', 'Cliente ' . $name . ' eliminado corectamente');
    }
}
