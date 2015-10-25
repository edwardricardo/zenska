@extends('layout')
@section('content')
	<section class="col-md-5 panel panel-default mainPanel">
		<div>					
			<a href="{{ action('MaintenanceController@getIndex') }}" class="btn btn-default btn-lg btn-block" id="buttonMantenimiento">Mantenimiento</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCaja">Caja</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Reportes</a>
		</div>
		<div class="secondgroup">
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonStock">Stock</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonCliDeudas">Clientes con Deuda</a>
			<a href="#" class="btn btn-default btn-lg btn-block" id="buttonBonos">Bonos</a>
		</div>
	</section>			
	<section class="col-md-5 col-md-offset-2 panel panel-default mainPanel">
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