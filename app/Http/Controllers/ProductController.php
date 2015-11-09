<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMenu()
    {
        return view('products.menu');
    }

    public function index()
    {
        return view('products.index');
    }

    public function getHairdressing()
    {
        $products = Product::where('section', '=', 'hairdressing')->paginate(10);
        return view('products.index', ['products' => $products, 'label' => 'Peluquer&iacute;a']);

    }

    public function getHandsfeetcare()
    {
        $products = Product::where('section', '=', 'handsfeetcare')->paginate(10);
        return view('products.index', ['products' => $products, 'label' => 'Manos y Pies']);
    }

    public function getBarbershop()
    {
        $products = Product::where('section', '=', 'barbershop')->paginate(10);
        return view('products.index', ['products' => $products, 'label' => 'Barber&iacute;a']);
    }

    public function getFood()
    {
        $products = Product::where('section', '=', 'food')->paginate(10);
        return view('products.index', ['products' => $products, 'label' => 'Alimentos']);
    }

    public function getOthers()
    {
        $products = Product::where('section', '=', 'other')->paginate(10);
        return view('products.index', ['products' => $products, 'label' => 'Otro Tipo']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($section, $label)
    {
        return view('products.create', ['section' => $section, 'label' => $label]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->fill($request->all());
        $product->section = str_replace('products.', '', $request->section);
        $product->save();

        return redirect(route($request->section))->with('message', 'Producto creado corectamente');


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
        $product = Product::findOrfail($id);
        return view('products.edit', compact('product', $product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrfail($id);
        $product->fill($request->all());
        $product->save();

        return redirect(route('products.' . $product->section))->with('message', 'Producto actualizado corectamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Product::destroy($id);
        return redirect(route('products.' . $product->section))->with('message', 'Producto ' . $product->name . ' eliminado corectamente');
    }
}
