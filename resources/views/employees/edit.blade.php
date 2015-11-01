@extends('layout.layout')
@section('title', 'Actualizar empleado')
@section('content')

    <div class="col-md-12 col-centered subrayado"><h1>Actualizar empleado</h1></div>
    @include('partials/errors')
    <div class="col-md-12 col-centered" style="padding: 0;">
        {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'col-centered form-style']) !!}
        @include('employees.partials.employee')
    </div>
    <div class="col-md-2 col-centered buttons-box" style="padding: 0;">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-8 col-centered buttons-box">
        {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-2 col-centered buttons-box" style="padding: 0;">
        {!! link_to_route('employees.index', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}
    </div>

@endsection