<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zenska N&H - @yield('title')</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<!--<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">-->
	<link rel="stylesheet" href="{{ asset('css/zenska-style.css')}}">

</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Zenska Nails & Hair</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>{!! link_to_route('main', 'Inicio') !!}</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ route('login') }}">Inicio de sesi&oacute;n</a></li>
					<li><a href="{{ route('register') }}">Registrarse</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('logout') }}">Cerrar sesi&oacute;n</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row row-centered">
		@yield('content')
	</div>
</div>

		<!-- Scripts -->
<script src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

</body>
</html>