@extends('layout.layout')
@section('title', 'Men&uacute Productos')
@section('content')

	<div class="row row-centered">
		<div class="col-centered col-md-8 col-xs-10 mainDiv">
			<div class="row row-centered">
				<div class="col-md-8 col-xs-12 col-centered subrayado"><h1>Men&uacute de Productos</h1></div>

				<section class="col-md-6 col-xs-12 col-centered mainPanel">
					<div>
						{!! link_to_route('products.hairdressing', 'Peluquer&iacute;a', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('products.handsfeetcare', 'Manos y Pies', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('products.barbershop', 'Barber&iacute;a', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('products.food', 'Alimentos', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('products.others', 'Otros', $atributes = array(),  ['class' => 'btn btn-default btn-lg btn-block']) !!}
						{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-lg btn-block']) !!}
					</div>
				</section>

			</div>
		</div>
	</div>



@stop