@extends('layout.layout')
@section('title', 'Men&uacute Principal')
@section('content')

	<section class="col-md-6 col-centered mainPanel">
		<div>
			{!! link_to_route('maintenance', 'Mantenimiento', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCaja">Caja</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Reportes</a>
		</div>
		<div class="secondgroup">
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonStock">Stock</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCliDeudas">Clientes con Deuda</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonBonos">Bonos</a>
		</div>
	</section>

	<section class="col-md-6 col-centered mainPanel">
		<div>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonMantenimiento">Configuración</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCaja">Acerca de...</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Niveles de Acceso</a>
		</div>
		<div class="secondgroup">
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonStock">Agenda</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCliDeudas">Estadisticas</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonBonos">Envio Email</a>
		</div>
	</section>
@stop