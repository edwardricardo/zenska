@extends('layout.layout')
@section('title', 'Men&uacute Mantenimiento')
@section('content')

	<div class="row row-centered">
		<div class="col-centered col-md-8 col-xs-10 mainDiv">
			<div class="row row-centered">
				<div class="col-md-8 col-xs-12 col-centered subrayado"><h1>Men&uacute de Mantenimiento</h1></div>

				<section class="col-md-6 col-xs-12 col-centered mainPanel">
					<div>
						{!! link_to_route('clients.index', 'Clientes', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('employees.index', 'Empleados', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('products.menu', 'Productos', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('services.menu', 'Servicios', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
					</div>
				</section>

				<section class="col-md-6 col-xs-12 col-centered mainPanel">
					<div>
						{!! link_to_route('providers.index', 'Proveedores', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						<a href="#" class="btn btn-default btn-lg btn-block" id="buttonReportes">Formas de Pago</a>
						{!! link_to_route('main', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-lg btn-block']) !!}
					</div>
				</section>

			</div>
		</div>
	</div>



@stop