<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('identificator', trans('validation.attributes.identificator'), ['class' => 'control-label']) !!}
        {!! Form::text('identificator', old('identificator'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('name', trans('validation.attributes.name'), ['class' => 'control-label']) !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('lastname', trans('validation.attributes.lastname'), ['class' => 'control-label']) !!}
        {!! Form::text('lastname', old('lastname'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('mobile', trans('validation.attributes.mobile'), ['class' => 'control-label']) !!}
        {!! Form::text('mobile', old('mobile'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('email', trans('validation.attributes.email'), ['class' => 'control-label']) !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control input-sm', 'type' => 'email']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('address', trans('validation.attributes.address'), ['class' => 'control-label']) !!}
        {!! Form::textarea('address', old('address'), ['class' => 'form-control input-sm', 'rows' => '2']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('telephone', trans('validation.attributes.telephone'), ['class' => 'control-label']) !!}
        {!! Form::text('telephone', old('telephone'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('birthday', trans('validation.attributes.birthday'), ['class' => 'control-label']) !!}
        {!! Form::text('birthday', old('birthday'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('sex', trans('validation.attributes.sex'), ['class' => 'control-label']) !!}
        <div class="radio">
            <label><input name="sex" type="radio" value="F">Mujer</label>
        </div>
        <div class="radio">
            <label><input name="sex" type="radio" value="M">Hombre</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('recommendedby', trans('validation.attributes.recommendedby'), ['class' => 'control-label']) !!}
        {!! Form::text('recommendby', old('recommendedby'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-1 form-group">
        {!! Form::label('discount', trans('validation.attributes.discount'), ['class' => 'control-label']) !!}
        {!! Form::text('discount', old('discount'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('clientsince', trans('validation.attributes.clientsince'), ['class' => 'control-label']) !!}
        {!! Form::text('clientsince', old('clientsince'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('lastvisit', trans('validation.attributes.lastvisit'), ['class' => 'control-label']) !!}
        {!! Form::text('lastvisit', old('lastvisit'), ['class' => 'form-control input-sm']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('photo', trans('validation.attributes.photo'), ['class' => 'control-label']) !!}
        {!! Form::text('photo', old('photo'), ['class' => 'form-control input-sm']) !!}
    </div></div>

<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('observation', trans('validation.attributes.observation'), ['class' => 'control-label']) !!}
        {!! Form::textarea('observation', old('observation'), ['class' => 'form-control input-sm', 'rows' => '2']) !!}
    </div></div>

<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('sendmail', trans('validation.attributes.sendmail'), ['class' => 'control-label']) !!}
        <div class="radio">
            <label><input name="sendmail" type="radio" value="Y">Si</label>
        </div>
        <div class="radio">
            <label><input name="sendmail" type="radio" value="N">No</label>
        </div>
    </div>
</div>