<div class="form-group">
    {!! Form::label('identificator', trans('validation.attributes.identificator')) !!}
    {!! Form::text('identificator', old('identificator')) !!}
</div>

<div class="form-group">
    {!! Form::label('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name', old('name')) !!}
</div>

<div class="form-group">
    {!! Form::label('lastname', trans('validation.attributes.lastname')) !!}
    {!! Form::text('lastname', old('lastname')) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile', trans('validation.attributes.mobile')) !!}
    {!! Form::text('mobile', old('mobile')) !!}
</div>

<div class="form-group">
    {!! Form::label('email', trans('validation.attributes.email')) !!}
    {!! Form::text('email', old('email'), ['type' => 'email']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', trans('validation.attributes.address')) !!}
    {!! Form::textarea('address', old('address'), ['rows' => '2']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone', trans('validation.attributes.telephone')) !!}
    {!! Form::text('telephone', old('telephone')) !!}
</div>

<div class="form-group">
    {!! Form::label('birthday', trans('validation.attributes.birthday')) !!}
    {!! Form::text('birthday', old('birthday')) !!}
</div>

<div class="form-group">
    {!! Form::label('sex', trans('validation.attributes.sex')) !!}
    <div class="radio">
        <label>{!! Form::radio('sex', 'F') !!}Mujer</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('sex', 'M') !!}Hombre</label>
    </div>
</div>

<div class="form-group">
    {!! Form::label('recommendedby', trans('validation.attributes.recommendedby')) !!}
    {!! Form::text('recommendedby', old('recommendedby')) !!}
</div>

<div class="form-group">
    {!! Form::label('discount', trans('validation.attributes.discount')) !!}
    {!! Form::text('discount', old('discount')) !!}
</div>

<div class="form-group">
    {!! Form::label('clientsince', trans('validation.attributes.clientsince')) !!}
    {!! Form::text('clientsince', old('clientsince')) !!}
</div>

<div class="form-group">
    {!! Form::label('lastvisit', trans('validation.attributes.lastvisit')) !!}
    {!! Form::text('lastvisit', old('lastvisit')) !!}
</div>

<div class="form-group">
    {!! Form::label('photo', trans('validation.attributes.photo')) !!}
    {!! Form::text('photo', old('photo')) !!}
</div>

<div class="form-group">
    {!! Form::label('observation', trans('validation.attributes.observation')) !!}
    {!! Form::textarea('observation', old('observation'), ['rows' => '2']) !!}
</div>

<div class="form-group">
    {!! Form::label('sendmail', trans('validation.attributes.sendmail')) !!}
    <div class="radio">
        <label>{!! Form::radio('sendmail', 'Y') !!}Si</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('sendmail', 'N') !!}No</label>
    </div>
</div>