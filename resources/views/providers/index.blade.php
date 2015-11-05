@extends('layout.layout')
@section('title', 'Proveedores')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Proveedores</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')
                    <table class="table table-curved">
                        <thead>
                        <tr>
                            <th class="col-md-1">RIF</th>
                            <th class="col-md-5">Nombre</th>
                            <th class="col-md-2 text-center">Tel&eacute;fono</th>
                            <th class="col-md-4">Persona de contacto</th>
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
                                <td class="col-md-1">{!!  link_to_route('providers.edit', $title = $provider->identificator, $parameters = ['id' => $provider->id])!!}</td>
                                <td class="col-md-5">{!!  link_to_route('providers.edit', $title = $provider->name, $parameters = ['id' => $provider->id])!!}</td>
                                <td class="col-md-2 text-center">{{$provider->telephone }}</td>
                                <td class="col-md-4">{{$provider->contact}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection