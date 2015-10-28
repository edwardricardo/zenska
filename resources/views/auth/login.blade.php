@extends('layout.layout')
@section('title', 'Inicio de sesi&oacute;n')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Iniciar sesi&oacute;n</div>
                <div class="panel-body">
                @include('partials/errors')

                    {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                        <div class="form-group">
                            {!! Form::label('email', trans('validation.attributes.email'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', trans('validation.attributes.password'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('remember', null) !!} Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Iniciar sesi&oacute;n', ['class' => 'btn btn-primary']) !!}
                                {!! link_to_route('password_request', 'Olvidaste tu contrase&ntilde;a?') !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection