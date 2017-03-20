@extends('layouts.default')

@section('content')

<h5 class="indigo-text center">Por favor, usa tu cuenta de Facebook</h5>

<div class="container">
	<div class="row  center">
		<div class="col s12">
	        <a href="{{ url('/auth/facebook') }}" name="btn_login" class="btn btn-large waves-effect indigo">Ingresa con Facebook</a>
		</div>
	</div>
</div>
@stop