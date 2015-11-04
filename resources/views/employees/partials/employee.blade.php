<div class="form-group col-md-2">
    {!! Form::label('identificator', trans('validation.attributes.identificator')) !!}
    {!! Form::text('identificator', old('identificator'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-5">
    {!! Form::label('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-5">
    {!! Form::label('lastname', trans('validation.attributes.lastname')) !!}
    {!! Form::text('lastname', old('lastname'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-4">
    {!! Form::label('email', trans('validation.attributes.email')) !!}
    {!! Form::text('email', old('email'), ['type' => 'email', 'class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('mobile', trans('validation.attributes.mobile')) !!}
    {!! Form::text('mobile', old('mobile'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('telephone', trans('validation.attributes.telephone')) !!}
    {!! Form::text('telephone', old('telephone'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('birthday', trans('validation.attributes.birthday')) !!}
    {!! Form::text('birthday', old('birthday'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-10">
    {!! Form::label('address', trans('validation.attributes.address')) !!}
    {!! Form::textarea('address', old('address'), ['rows' => '2', 'class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('sex', trans('validation.attributes.sex')) !!}
    <div class="radio">
        <label>{!! Form::radio('sex', 'F') !!}Mujer</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('sex', 'M') !!}Hombre</label>
    </div>
</div>
<div class="form-group col-md-3">
    {!! Form::label('employeesince', trans('validation.attributes.employeesince')) !!}
    {!! Form::text('employeesince', old('employeesince'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-10">
    {!! Form::label('observation', trans('validation.attributes.observation')) !!}
    {!! Form::textarea('observation', old('observation'), ['rows' => '2', 'class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('photo', trans('validation.attributes.photo')) !!}
    {!! Form::text('photo', old('photo'), ['class' => 'form-control input-sm']) !!}
</div>