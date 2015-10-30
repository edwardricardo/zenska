@extends('layout.layout')
@section('title', 'Actualizar cliente')
@section('content')

    <div class="panel panel-default"><h2>Editar cliente</h2></div>
    @include('partials/errors')
    @include('partials.message')

    <div class="container">
        {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT', 'role' => 'form']) !!}
            @include('partials.client')
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <div class="form-group">
            <a class="btn btn-danger" href="{{route('clients.index')}}" role="button">Eliminar</a>
            <a class="btn btn-default" href="{{route('clients.index')}}" role="button">Regresar</a>
        </div>
    </div>
@endsection