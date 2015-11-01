@extends('layout.layout')
@section('title', 'Proveedores')
@section('content')
    <div class="col-md-12 col-centered subrayado"><h1>Proveedores</h1></div>
    <div class="col-md-12 col-centered" style="padding: 0;">
        @include('partials.message')
        <table class="table table-hover table-curved table-condensed">
            <thead>
            <tr>
                <th class="col-md-1">RIF</th>
                <th class="col-md-4">Nombre</th>
                <th class="col-md-2 text-center">Tel&eacute;fono</th>
                <th class="col-md-4 text-center">Persona de contacto</th>
                <th class="col-md-1 text-center">Operaci&oacute;n</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="3">{!! link_to_route('providers.create', 'Nuevo proveedor', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                <td colspan="2">{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center;">{!! $providers->render() !!}</td>
            </tr>
            </tfoot>
            <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td class="col-md-3">{{$provider->identificator}}</td>
                    <td class="col-md-3">{{$provider->name}}</td>
                    <td class="col-md-2 text-center">{{$provider->telephone }}</td>
                    <td class="col-md-2">{{$provider->contact}}</td>
                    <td class="col-md-1 text-center">
                        <div class="btn-group" role="group">
                            <div class="btn-group" role="group">
                                {!!  link_to_route('providers.edit', $title = 'Ver', $parameters = ['id' => $provider->id], $attributes = ['class' => 'btn btn-primary btn-sm'])!!}
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection