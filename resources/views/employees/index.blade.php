@extends('layout.layout')
@section('title', 'Empleados')
@section('content')

    <div class="col-md-12 col-centered subrayado"><h1>Empleados</h1></div>
    <div class="col-md-12 col-centered" style="padding: 0;">
        @include('partials.message')
        <table class="table table-hover table-curved table-condensed">
            <thead>
            <tr>
                <th class="col-md-3">Nombre</th>
                <th class="col-md-3">Apellido</th>
                <th class="col-md-2 text-center">Tel&eacute;fono M&oacute;vil</th>
                <th class="col-md-2 text-center">Tel&eacute;fono</th>
                <th class="col-md-1 text-center">Operaci&oacute;n</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="3">{!! link_to_route('employees.create', 'Nuevo empleado', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                <td colspan="2">{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center;">{!! $employees->render() !!}</td>
            </tr>
            </tfoot>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td class="col-md-3">{{$employee->name}}</td>
                    <td class="col-md-3">{{$employee->lastname}}</td>
                    <td class="col-md-2 text-center">{{$employee->mobile}}</td>
                    <td class="col-md-2 text-center">{{$employee->telephone}}</td>
                    <td class="col-md-1 text-center">
                        <div class="btn-group" role="group">
                            <div class="btn-group" role="group">
                                {!!  link_to_route('employees.edit', $title = 'Ver', $parameters = ['id' => $employee->id], $attributes = ['class' => 'btn btn-primary btn-sm'])!!}
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection