@extends('layouts.default')

@section('content')
	<div class="grey lighten-4 row">
    <div class="container">
      <div class="row">
        <div class="col s12 center">
          Unidos somos <strong>#UnaSolaFuerza</strong>
        </div>

        <div class="col s12 center">
          <a href="#" class="waves-effect waves-light btn">SER VOLUNTARIO</a>
          <a href="#" class="waves-effect waves-light btn">DAR REFUGIO</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <br>
    <div class="row btt">
      <div class="container">
        <div class="row col s12">
          <div class="card grey lighten-2">
            <div class="card-content">
              <p class="center"><b>VOLUNTARIADOS A NIVEL NACIONAL</b></p>
            </div>
            <div class="card-content grey lighten-4">
              <div id="test5"><div id="googleMap" style="width:100%;height:400px;"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row col s12">
          <div class="card grey lighten-2">
            <div class="card-content">
              <p class="center"><b>REFUGIOS A NIVEL NACIONAL</b></p>
            </div>
            <div class="card-content grey lighten-4">
              <div id="test5"><div id="googleMap2" style="width:100%;height:400px;"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop