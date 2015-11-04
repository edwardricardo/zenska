@extends('layout.layout')
@section('title', 'Empleadoss')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Empleados</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')
                    <table class="table table-curved">
                        <thead>
                        <tr>
                            <th class="col-md-6">Nombre</th>
                            <th class="col-md-3 text-center">Tel&eacute;fono M&oacute;vil</th>
                            <th class="col-md-3 text-center">Tel&eacute;fono</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="2">{!! link_to_route('employees.create', 'Nuevo empleado', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                            <td>{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;">{!! $employees->render() !!}</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td class="col-md-6">{!!  link_to_route('employees.edit', $title = $employee->name . " " . $employee->lastname, $parameters = ['id' => $employee->id])!!}</td>
                                <td class="col-md-3 text-center">{{$employee->mobile}}</td>
                                <td class="col-md-3 text-center">{{$employee->telephone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection