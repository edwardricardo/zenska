<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ServiceRequest;
use App\Service;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMenu()
    {
        return view('services.menu');
    }

    public function index()
    {
        return view('services.index');
    }

    public function getHairdressing()
    {
        $services = Service::where('section', '=', 'hairdressing')->paginate(10);
        return view('services.index', ['services' => $services, 'label' => 'Peluquer&iacute;a']);
    }

    public function getHandsfeetcare()
    {
        $services = Service::where('section', '=', 'handsfeetcare')->paginate(10);
        return view('services.index', ['services' => $services, 'label' => 'Manos y Pies']);
    }

    public function getBarbershop()
    {
        $services = Service::where('section', '=', 'barbershop')->paginate(10);
        return view('services.index', ['services' => $services, 'label' => 'Barber&iacute;a']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($section, $label)
    {
        return view('services.create', ['section' => $section, 'label' => $label]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $service = new Service;
        $service->fill($request->all());
        $service->section = str_replace('services.', '', $request->section);
        $service->save();

        return redirect(route($request->section))->with('message', 'Servicio creado corectamente');
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
        $service = Service::findOrfail($id);
        return view('services.edit', compact('service', $service));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrfail($id);
        $service->fill($request->all());
        $service->save();

        return redirect(route('services.' . $service->section))->with('message', 'Servicio actualizado corectamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Service::destroy($id);
        return redirect(route('services.' . $service->section))->with('message', 'Servicio ' . $service->name . ' eliminado corectamente');
    }
}
