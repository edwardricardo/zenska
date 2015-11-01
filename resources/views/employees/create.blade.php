@extends('layout.layout')
@section('title', 'Nuevo empleado')
@section('content')

    <div class="col-md-12 col-centered subrayado"><h1>Nuevo empleado</h1></div>
    @include('partials/errors')
    <div class="col-md-12 col-centered" style="padding: 0;">
        {!! Form::open(['route' => 'employees.store', 'method' => 'post', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
        @include('employees.partials.employee')
    </div>
    <div class="col-md-10 col-centered buttons-box" style="padding: 0;">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
    <div class="col-md-2 col-centered buttons-box" style="padding: 0;">
        {!! link_to_route('employees.index', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection