@extends('layout.layout')
@section('title', 'Servicios de ' . $label)
@section('content')
    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Servicios de {!! $label !!}</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')
                    @include('services.partials.noservices')
                    <table class="table table-curved">
                        <thead>
                        <tr>
                            <th class="col-md-2">Codigo</th>
                            <th class="col-md-6 text-center">Nombre</th>
                            <th class="col-md-2 text-center">Precio</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="2">{!! link_to_route('services.create', 'Nuevo servicio', $atributes = array( Route::currentRouteName(),$label ),  ['class' => 'btn btn-primary']) !!}</td>
                            <td>{!! link_to_route('services.menu', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">{!! $services->render() !!}</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td class="col-md-2">{!!  link_to_route('services.edit', $title = $service->code, $parameters = ['id' => $service->id])!!}</td>
                                <td class="col-md-6">{!!  link_to_route('services.edit', $title = $service->name, $parameters = ['id' => $service->id])!!}</td>
                                <td class="col-md-2 text-center">{{$service->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
