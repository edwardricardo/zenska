@extends('layout.layout')
@section('title', 'Nuevo empleado')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-9 col-xs-11 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Nuevo empleado</h1></div>
                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials/errors')
                </div>

                <div class="col-md-11 col-xs-11 col-centered">
                    {!! Form::open(['route' => 'employees.store', 'method' => 'post', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
                    @include('employees.partials.employee')
                </div>

                <div class="col-md-2 col-xs-12 col-centered buttons-box">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>

                <div class="col-md-2 col-xs-12 col-centered buttons-box">
                    {!! link_to_route('employees.index', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection