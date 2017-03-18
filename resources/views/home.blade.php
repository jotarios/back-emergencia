@extends('master')

@section('content')
	<h1>Hello {{ Auth::user()->name }}</h1>
	<h2>your email is: {{ Auth::user()->email}}</h2>
@stop