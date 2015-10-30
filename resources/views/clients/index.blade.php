@extends('layout.layout')
@section('title', 'Clientes')
@section('content')

    <div class="col-md-12 col-centered subrayado"><h1>Clientes</h1></div>
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
                <td colspan="3">{!! link_to_route('clients.create', 'Nuevo cliente', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                <td colspan="2">{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
            </tr>
            </tfoot>
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

                </tbody>
            </table>
        <div class="col-md-10 col-centered" style="padding:0;">
            {!! $clients->render() !!}
        </div>
    </div>
@endsection