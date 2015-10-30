@extends('layout.layout')
@section('title', 'Nuevo cliente')
@section('content')

    <div class="col-md-10 col-centered panel panel-default"><h1>Nuevo cliente</h1></div>
    @include('partials/errors')
    {!! Form::open(['route' => 'clients.store', 'method' => 'post', 'role' => 'form', 'class' => 'col-centered']) !!}

    {!! Form::close() !!}}
@endsection