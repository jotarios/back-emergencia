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
	</head>
	<body>
		<main id="main" class="center-align">
			<div class="section"></div> 
	      	<img class="responsive-img" src="{{URL::asset('img/logo/logo-web.png')}}" />
	      	<div class="section"></div>

	    	<h5 class="indigo-text">Por favor, usa tu cuenta de Facebook</h5>

	      	<div class="container btn-facebook">
	      	<div class="section"></div>
	        	<div class="row btn-facebook">
		        	<div class="col s12 m4 offset-4 l4 offset-l4 btn-facebook">
		                <a href='/auth/facebook' name='btn_login' class='btn btn-large waves-effect indigo'><i></i>Ingresa con Facebook</a>
		        	</div>
	        	</div>
	      	</div>
	  	</main>
  	</body>
</html>