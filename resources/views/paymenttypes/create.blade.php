@extends('layout.layout')
@section('title', 'Nueva forma de pago')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-11 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Nueva Forma de pago</h1></div>
                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials/errors')
                </div>

                <div class="col-md-11 col-xs-11 col-centered">
                    {!! Form::open(['route' => 'paymenttypes.store', 'method' => 'post', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
                    @include('paymenttypes.partials.paymenttype')
                </div>

                <div class="col-md-6 col-xs-12 col-centered buttons-box">
                    <div class="col-md-6 col-xs-12 col-centered buttons-box">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary col-md-12 col-xs-12']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="col-md-6 col-xs-12 col-centered buttons-box">
                        {!! link_to_route('paymenttypes.index', 'Atras', $atributes = null,  ['class' => 'btn btn-success col-md-12 col-xs-12']) !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection