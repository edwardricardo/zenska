@extends('layout.layout')
@section('title', 'Clientes')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Clientes</h1></div>

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
                            <td colspan="2">{!! link_to_route('clients.create', 'Nuevo cliente', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                            <td>{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;">{!! $clients->render() !!}</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td class="col-md-6">{!!  link_to_route('clients.edit', $title = $client->name . " " . $client->lastname, $parameters = ['id' => $client->id])!!}</td>
                                <td class="col-md-3 text-center">{{$client->mobile}}</td>
                                <td class="col-md-3 text-center">{{$client->telephone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection