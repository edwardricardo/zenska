@extends('layout.layout')
@section('title', 'Inicio de sesi&oacute;n')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-6 mainDiv">
            <div class="row row-centered">
                <div class="col-md-8 col-xs-8 col-centered subrayado"><h1>Iniciar sesi&oacute;n</h1></div>
                @include('partials/errors')

                <section class="col-md-8 col-xs-8 col-centered">
                    {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                    <div class="form-group">
                        {!! Form::label('email', trans('validation.attributes.email'), ['class' => 'control-label maintext']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', trans('validation.attributes.password'), ['class' => 'control-label maintext']) !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>{!! Form::checkbox('remember', null) !!} <span
                                        class="maintext">Recordarme </span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Iniciar sesi&oacute;n', ['class' => 'btn btn-primary']) !!}
                        {!! link_to_route('password_request', 'Olvidaste tu contrase&ntilde;a?', null, ['class' =>'maintext']) !!}
                    </div>
                    {!! Form::close() !!}
                </section>

            </div>
        </div>

    </div>










@endsection