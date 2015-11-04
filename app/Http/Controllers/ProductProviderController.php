<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductProviderRequest;
use App\ProductProvider;

class ProductProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = ProductProvider::paginate(10);
        return view('providers.index', compact('providers', $providers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductProviderRequest $request)
    {
        ProductProvider::create($request->all());
        return redirect(route('providers.index'))->with('message', 'Proveedor creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = ProductProvider::findOrfail($id);
        return view('providers.edit', compact('provider', $provider));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductProviderRequest $request, $id)
    {
        $provider = ProductProvider::findOrfail($id);
        $provider->fill($request->all());
        $provider->save();

        return redirect(route('providers.index'))->with('message', 'Proveedor actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = ProductProvider::findOrFail($id);
        ProductProvider::destroy($id);
        return redirect(route('providers.index'))->with('message', 'Proveedor ' . $provider->name . ' eliminado corectamente');
    }
}
