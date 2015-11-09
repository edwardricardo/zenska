<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    public function getHairdressing()
    {
        $products = Product::where('section', '=', 'hairdressing')->paginate(10);
        return view('products.products', ['products' => $products, 'label' => 'Peluquer&iacute;a']);

    }

    public function getHandsfeetcare()
    {
        $products = Product::where('section', '=', 'handsfeetcare')->paginate(10);
        return view('products.products', ['products' => $products, 'label' => 'Manos y Pies']);
    }

    public function getBarbershop()
    {
        $products = Product::where('section', '=', 'barbershop')->paginate(10);
        return view('products.products', ['products' => $products, 'label' => 'Barber&iacute;a']);
    }

    public function getFood()
    {
        $products = Product::where('section', '=', 'food')->paginate(10);
        return view('products.products', ['products' => $products, 'label' => 'Alimentos']);
    }

    public function getOthers()
    {
        $products = Product::where('section', '=', 'other')->paginate(10);
        return view('products.products', ['products' => $products, 'label' => 'Otro Tipo']);
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
        return $product;
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
        return 'editar: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
