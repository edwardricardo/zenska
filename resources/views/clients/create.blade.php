@extends('layout')
@section('title', 'Nuevo cliente')
@section('content')

    <div class="panel panel-default"><h2>Nuevo cliente</h2></div>
    @include('partials/errors')

    <div class="row">
        {!! Form::open(array('route' => 'clients.store', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) !!}

            <div class="col-md-2">
                {!! Form::label('identificator', trans('validation.attributes.identificator'), ['class' => 'control-label']) !!}
                {!! Form::text('identificator', old('identificator'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-5">
                {!! Form::label('name', trans('validation.attributes.name'), ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-5">
                {!! Form::label('lastname', trans('validation.attributes.lastname'), ['class' => 'control-label']) !!}
                {!! Form::text('lastname', old('lastname'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('mobile', trans('validation.attributes.mobile'), ['class' => 'control-label']) !!}
                {!! Form::text('mobile', old('mobile'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('email', trans('validation.attributes.email'), ['class' => 'control-label']) !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control', 'type' => 'email']) !!}
            </div>

            <div class="col-md-8">
                {!! Form::label('address', trans('validation.attributes.address'), ['class' => 'control-label']) !!}
                {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('telephone', trans('validation.attributes.telephone'), ['class' => 'control-label']) !!}
                {!! Form::text('telephone', old('telephone'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('birthday', trans('validation.attributes.birthday'), ['class' => 'control-label']) !!}
                {!! Form::text('birthday', old('birthday'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('sex', trans('validation.attributes.sex'), ['class' => 'control-label']) !!}
                {!! Form::text('sex', old('sex'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('recommendedby', trans('validation.attributes.recommendedby'), ['class' => 'control-label']) !!}
                {!! Form::text('recommendby', old('recommendedby'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('discount', trans('validation.attributes.discount'), ['class' => 'control-label']) !!}
                {!! Form::text('discount', old('discount'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('clientsince', trans('validation.attributes.clientsince'), ['class' => 'control-label']) !!}
                {!! Form::text('clientsince', old('clientsince'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-2">
                {!! Form::label('lastvisit', trans('validation.attributes.lastvisit'), ['class' => 'control-label']) !!}
                {!! Form::text('lastvisit', old('lastvisit'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-4">
                {!! Form::label('photo', trans('validation.attributes.photo'), ['class' => 'control-label']) !!}
                {!! Form::text('photo', old('photo'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-4">
                {!! Form::label('observation', trans('validation.attributes.observation'), ['class' => 'control-label']) !!}
                {!! Form::text('observation', old('observation'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-4">
                {!! Form::label('sendmail', trans('validation.attributes.sendmail'), ['class' => 'control-label']) !!}
                {!! Form::text('sendmail', old('sendmail'), ['class' => 'form-control']) !!}
            </div>

            <div class="col-md-12">
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
        </div>
@endsection