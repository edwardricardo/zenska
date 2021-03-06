@extends('layout.layout')
@section('title', 'Nuevo Proveedor')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-11 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Nuevo proveedor</h1></div>
                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials/errors')
                </div>

                <div class="col-md-11 col-xs-11 col-centered">
                    {!! Form::open(['route' => 'providers.store', 'method' => 'post', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
                    @include('providers.partials.provider')
                </div>

                <div class="col-md-6 col-xs-12 col-centered buttons-box">
                    <div class="col-md-6 col-xs-12 col-centered buttons-box">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary col-md-12 col-xs-12']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="col-md-6 col-xs-12 col-centered buttons-box">
                        {!! link_to_route('providers.index', 'Atras', $atributes = array(),  ['class' => 'btn btn-success col-md-12 col-xs-12']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection