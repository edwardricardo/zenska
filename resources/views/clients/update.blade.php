@extends('layout.layout')
@section('title', 'Nuevo cliente')
@section('content')

    <div class="panel panel-default"><h2>Nuevo cliente</h2></div>
    @include('partials/errors')

    <div class="container">
        {!! Form::open(['route' => 'clients.store', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        @include('partials.client')
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection