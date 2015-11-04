@extends('layout.layout')
@section('title', 'Actualizar proveedor')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-11 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Nuevo proveedor</h1></div>
                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials/errors')
                </div>

                <div class="col-md-11 col-xs-11 col-centered">
                    {!! Form::model($provider, ['route' => ['providers.update', $provider->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
                    @include('providers.partials.provider')
                </div>

                <div class="col-md-2 col-xs-12 col-centered buttons-box">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>

                <div class="col-md-2 col-xs-12 col-centered buttons-box">
                    {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>

                <div class="col-md-2 col-xs-12 col-centered buttons-box">
                    {!! link_to_route('providers.index', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection