<div class="form-group col-md-2">
    {!! Form::label('identificator', trans('validation.attributes.rif')) !!}
    {!! Form::text('identificator', old('identificator'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
    {!! Form::label('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('telephone', trans('validation.attributes.telephone')) !!}
    {!! Form::text('telephone', old('telephone'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('fax', trans('validation.attributes.fax')) !!}
    {!! Form::text('fax', old('fax'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
    {!! Form::label('email', trans('validation.attributes.email')) !!}
    {!! Form::text('email', old('email'), ['type' => 'email', 'class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
    {!! Form::label('url', trans('validation.attributes.url')) !!}
    {!! Form::text('url', old('url'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-4">
    {!! Form::label('contact', trans('validation.attributes.contact')) !!}
    {!! Form::text('contact', old('contact'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-12">
    {!! Form::label('address', trans('validation.attributes.address')) !!}
    {!! Form::textarea('address', old('address'), ['rows' => '2', 'class' => 'form-control']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('payment', trans('validation.attributes.payment')) !!}
    {!! Form::select('payment', array('' => 'Seleccione...', 'Credito' => 'Cr&eacute;dito', 'Contado' => 'Contado'), null, ['placeholder' => 'Seleccione...', 'class' => 'form-control']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('discount', trans('validation.attributes.discount')) !!}
    {!! Form::text('discount', old('discount'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-2">
    {!! Form::label('bank', trans('validation.attributes.bank')) !!}
    {!! Form::text('bank', old('bank'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-3">
    {!! Form::label('bank_account', trans('validation.attributes.bank_account')) !!}
    {!! Form::text('bank_account', old('bank_account'), ['class' => 'form-control']) !!}
</div>
<div class="form-group col-md-12">
    {!! Form::label('observation', trans('validation.attributes.observation')) !!}
    {!! Form::textarea('observation', old('observation'), ['rows' => '2', 'class' => 'form-control']) !!}
</div>