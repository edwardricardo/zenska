@extends('layout.layout')
@section('title', 'Men&uacute Mantenimiento')
@section('content')
	<section class="col-md-6 col-centered mainPanel">
		<div>
			{!! link_to_route('clients.index', 'Clientes', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
			{!! link_to_route('employees.index', 'Empleados', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Productos</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Servicios</a>
		</div>
	</section>
	<section class="col-md-6 col-centered mainPanel">
		<div>
			{!! link_to_route('providers.index', 'Proveedores', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Formas de Pago</a>
			{!! link_to_route('main', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-lg btn-block']) !!}
		</div>
	</section>
@stop