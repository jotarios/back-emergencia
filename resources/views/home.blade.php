@extends('layouts.default')

@section('content')
	<div class="row red darken-4 vh">
      <div class="container">
        <br>
        <div class="row col s12 center titulo2 white-text">
          Unidos somos <b>#UnaSolaFuerza</b>
        </div>
        <div class="container">
          <div class="col s12">
            <div class="col s6">
              <div class="card-panel yellow darken-2 center">
                <a href="http://emergenciaperu.com/"><span class="black-text titulo3">ALERTA DE HUAYCOS
                </span></a>
              </div>
            </div>
            <div class="col s6">
              <div class="card-panel yellow darken-2 center">
                <a href="/voluntarios"><span class="black-text titulo3">VOLUNTARIOS
                </span></a>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
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