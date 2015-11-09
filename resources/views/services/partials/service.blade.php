<div class="form-group col-md-2">
    {!! Form::label('code', trans('validation.attributes.code')) !!}
    {!! Form::text('code', old('code'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-5">
    {!! Form::label('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control  input-sm']) !!}
</div>
<div class="form-group col-md-5">
    {!! Form::label('price', trans('validation.attributes.price')) !!}
    {!! Form::text('price', old('price'), ['class' => 'form-control  input-sm']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('profit_percent', trans('validation.attributes.profit_percent')) !!}
    {!! Form::text('profit_percent', old('profit_percent'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('employee_percent', trans('validation.attributes.employee_percent')) !!}
    {!! Form::text('employee_percent', old('employee_percent'), ['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('active', trans('validation.attributes.active')) !!}
    <div class="radio">
        <label>{!! Form::radio('active', 'Y') !!}Si</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('active', 'N') !!}No</label>
    </div>
</div>
<div class="form-group col-md-10">
    {!! Form::label('observation', trans('validation.attributes.observation')) !!}
    {!! Form::textarea('observation', old('observation'), ['rows' => '2', 'class' => 'form-control input-sm']) !!}
</div>
