@extends('layout.layout')
@section('title', 'Clientes')
@section('content')

        @include('partials.message')
        <div class="panel panel-default col-md-10 col-centered"><h1>Clientes</h1></div>
        <div class="col-md-10 col-centered" style="padding: 0;">
            <table class="table table-bordered table-hover table-curved table-condensed">
                <thead>
                    <tr>
                        <th class="col-md-3">Nombre</th>
                        <th class="col-md-3">Apellido</th>
                        <th class="col-md-2 text-center">Tel&eacute;fono M&oacute;vil</th>
                        <th class="col-md-2 text-center">Tel&eacute;fono</th>
                        <th class="col-md-1 text-center">Operaci&oacute;n</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td class="col-md-3">{{$client->name}}</td>
                        <td class="col-md-3">{{$client->lastname}}</td>
                        <td class="col-md-2 text-center">{{$client->mobile}}</td>
                        <td class="col-md-2 text-center">{{$client->telephone}}</td>
                        <td class="col-md-1 text-center">
                            <div class="btn-group" role="group">
                                <div class="btn-group" role="group">
                                    {!!  link_to_route('clients.edit', $title = 'Editar', $parameters = ['id' => $client->id], $attributes = ['class' => 'btn btn-primary'])!!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5">{!! link_to_route('clients.create', 'Nuevo cliente', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-10 col-centered"  style="padding: 0;">
            {!! $clients->render() !!}
        </div>
@endsection