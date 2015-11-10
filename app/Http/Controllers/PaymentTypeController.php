<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PaymentTypeRequest;
use App\PaymentType;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymenttypes = PaymentType::paginate(10);
        return view('paymenttypes.index', compact('paymenttypes', $paymenttypes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paymenttypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentTypeRequest $request)
    {
        PaymentType::create($request->all());
        return redirect(route('paymenttypes.index'))->with('message', 'Forma de pago creada corectamente');;
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
        $paymenttype = PaymentType::findOrfail($id);
        return view('paymenttypes.edit', compact('paymenttype', $paymenttype));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentTypeRequest $request, $id)
    {
        $paymenttype = PaymentType::findOrFail($id);
        $paymenttype->fill($request->all());
        $paymenttype->save();

        return redirect(route('paymenttypes.index'))->with('message', 'Forma de pago actualizada corectamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymenttype = PaymentType::findOrFail($id);
        PaymentType::destroy($id);
        return redirect(route('paymenttypes.index'))->with('message', 'Cliente ' . $paymenttype->name . ' eliminado corectamente');
    }
}
