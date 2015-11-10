<div class="form-group col-md-5">
    {!! Form::label('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control  input-sm']) !!}
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
