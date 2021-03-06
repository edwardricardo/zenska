@extends('layout.layout')
@section('title', 'Actualizar producto')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-11 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Actualizar producto</h1></div>
                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials/errors')
                </div>

                <div class="col-md-11 col-xs-11 col-centered">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
                    @include('products.partials.product')
                </div>

                <div class="col-md-11 col-xs-12 col-centered buttons-box">

                    <div class="col-md-4 col-xs-12 col-centered buttons-box">
                        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary col-md-12 col-xs-12']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="col-md-4 col-xs-12 col-centered buttons-box">
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger col-md-12 col-xs-12']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="col-md-4 col-xs-12 col-centered buttons-box">
                        {!! link_to_route('products.' . $product->section, 'Atras', $atributes = array(),  ['class' => 'btn btn-success col-md-12 col-xs-12']) !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection