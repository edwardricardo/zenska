<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $pproducts = Product::where('section', '=', 'Peluqueria')->paginate(10);
        $mpproducts = Product::where('section', '=', 'Manos y Pies')->paginate(10);
        $bproducts = Product::where('section', '=', 'Barberia')->paginate(10);
        $aproducts = Product::where('section', '=', 'Alimentos')->paginate(10);
        $oproducts = Product::where('section', '=', 'Otros')->paginate(10);

        return view('products.index', ['pproducts' => $pproducts, 'mpproducts' => $mpproducts, 'bproducts' => $bproducts, 'aproducts' => $aproducts, 'oproducts' => $oproducts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
