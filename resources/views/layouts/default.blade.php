<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>EMERGENCIA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="{{URL::asset('css/materialize.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/helpers.css')}}" media="screen,projection"/>
		<!--Custom CSS-->
		@yield('css')
	</head>
	<body id="voluntario">
		<nav class="grey lighten-5">
      		<div class="nav-wrapper">
      			<a href="#" class="brand-logo right black-text">Hola, {{ Auth::user()->name}}</a>
	        	<ul id="nav-mobile" class="left hide-on-med-and-down black-text">
		          	<li><a href="#" class="black-text titulo1"><span style="color: red;">E</span>mergencias <b>Perú</b></a></li>
		          	<li><a href="http://emergenciaperu.com/" target="_blank" class="black-text">ALERTAS DE HUAYCO</a></li>
		          	<li><a href="voluntarios" class="black-text">VOLUNTARIOS</a></li>
		          	<li><a href="#" class="black-text">CONTACTO</a></li>
	        	</ul>
      		</div>
    	</nav>

    	@yield('content')

	<script type="text/javascript" src="{{URL::asset('js/helpers.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvZtQOIf5GmXC4r_DymvtBuYIGdnENXb4&callback=initMap"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>

	<!--Custom JS-->
	@yield('js')
	</body>
</html>	