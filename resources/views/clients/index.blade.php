@extends('layout')
@section('title', 'Clientes')
@section('content')
@include('partials.message')
    <div class="row">

        <div class="panel panel-default col-md-12"><h1>Clientes</h1></div>

        <table class="table table-bordered table-striped table-hover table-curved table-condensed">
            <thead>
                <tr>
                    <th class="col-md-3">Nombre</th>
                    <th class="col-md-3">Apellido</th>
                    <th class="col-md-2 text-center">Tel&eacute;fono M&oacute;vil</th>
                    <th class="col-md-2 text-center">Tel&eacute;fono</th>
                    <th class="col-md-2 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td class="col-md-3">{{$client->name}}</td>
                        <td class="col-md-3">{{$client->lastname}}</td>
                        <td class="col-md-2 text-center">{{$client->mobile}}</td>
                        <td class="col-md-2 text-center">{{$client->telephone}}</td>
                        <td class="col-md-2 text-center">
                            <div class="btn-group btn-group-justified" role="group">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Ver</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Modificar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="panel panel-default col-md-12">
            <div class="col-md-3">{!! $clients->render() !!}</div>
            <div class="col-md-3" id="ncb">
                <a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Nuevo cliente</a>
            </div>
        </div>
    </div>
@endsection