<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>EMERGENCIA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
		<link rel="stylesheet" href="{{URL::asset('css/materialize.css')}}">
		<!--Custom CSS-->
		@yield('css')
	</head>
	<body>
    <div class="emergencia-menu">
        <div class="container">
            <nav class="white row">
                <div class="nav-wrapper col s12">
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <a href="http://emergenciaperu.com" class="brand-logo"><img src="{{ url::asset('img/logo.png') }}"></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="http://emergenciaperu.com/reports">INCIDENCIAS</a></li>
                    <li><a href="http://emergenciaperu.com/reports/submit">ENVIAR INCIDENCIA</a></li>
                    <li><a href="http://emergenciaperu.com/alerts">RECIBIR ALERTAS</a></li>
                    <li><a href="{{ url('/') }}" class="waves-effect waves-light btn grey-text"><img src="{{ url::asset('img/heart-icon.png') }}">BRINDAR AYUDA</a></li>
                  </ul>
                  <ul id="mobile-demo" class="close">
                    <li><a href="http://emergenciaperu.com/reports">INCIDENCIAS</a></li>
                    <li><a href="http://emergenciaperu.com/reports/submit">ENVIAR INCIDENCIA</a></li>
                    <li><a href="http://emergenciaperu.com/alerts">RECIBIR ALERTAS</a></li>
                    <li><a href="{{ url('/') }}" class="waves-effect waves-light btn grey-text"><img src="{{ url::asset('img/heart-icon.png') }}">BRINDAR AYUDA</a></li>
                  </ul>
                </div>
            </nav>
        </div>
    </div>

    @yield('content')

    
    <div class="footer row center">
        <p>Está página ha sido hecha colaborativamente en Hackspace Perú. <a href="https://www.facebook.com/HackSpacePeru" target="_blank">CONTACTO</a></p>
    </div>

	<script type="text/javascript" src="{{URL::asset('js/helpers.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript">
        $(".button-collapse").click(function() {
          $("#mobile-demo").slideToggle('100');
        });
    </script>
	<!--Custom JS-->
	@yield('js')
	</body>
</html>	