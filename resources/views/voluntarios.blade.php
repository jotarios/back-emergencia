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
                <a href="http://emergenciaperu.com/"><span class="black-text titulo3">DAR REFUGIO</span></a>
              </div>
            </div>
            <div class="col s6">
              <div class="card-panel yellow darken-2 center">
                <a href="#eventos"><span class="black-text titulo3">SER VOLUNTARIO</span></a>
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
              <p class="center"><b>VOLUNTARIOS Y REFUGIOS A NIVEL NACIONAL</b></p>
            </div>
            <div class="card-content grey lighten-4">
              <div id="test5"><div id="googleMap" style="width:100%;height:400px;"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="eventos">
      <div class="container">
        <div class="col s12">
          <div class="card horizontal">
            <div class="card-image">
              <img src="http://lorempixel.com/output/animals-q-c-400-300-4.jpg">
            </div>
            <div class="card-stacked white">
              <div class="card-content">
                <p class="titulo4"><b>ANGOLO Y ANCHOR</b></p>
                <i class="small material-icons">language</i> Chosica, Lima
                <i class="small material-icons">perm_contact_calendar</i> Mar 24, 2017
                <i class="small material-icons">av_timer</i> 8:30 pm
                <br><br>
                <i class="small material-icons">perm_identity</i> 44 Voluntarios
                <br><br>
                <i class="small material-icons">verified_user</i> ORGANIZADO POR LIBELULA PERU
                <br>
                
              </div>
              <div class="card-action">
                <a class="waves-effect waves-light btn white black-text"><i class="material-icons left">info_outline</i>button</a>
                <a class="waves-effect waves-light btn white black-text"><i class="material-icons left">theaters</i>button</a>
              </div>
            </div>
          </div>
        </div>	
      </div>        
    <div class="row">
      <div class="container">
        <div class="col s4">
          <a class="waves-effect waves-light btn-large red darken-4" data-target="modal_agregar" >Agregar Evento</a>
        </div>
      </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal_agregar" class="modal">
      <div class="modal-content">
        <p>Ingresa la url de tu evento de Facebook</p>
        <div class="input-field col s12">
          <input placeholder="Ejemplo: https://www.facebook.com/events/1115929058529970/" id="facebook_event" type="text" class="validate">
          <label for="facebook_event">URL de Evento</label>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">CREAR EVENTO</a>
      </div>
    </div>

@stop
@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#modal_voluntario').modal();
			 $('#modal_refugio').modal();
        $('#modal_agregar').modal({
          complete: function() { 
            var facebook_url = $('#facebook_event').val();
            if(facebook_url) {
              var url_parts = facebook_url.match(/https?\:\/\/(?:www\.)?facebook\.com\/(\d+|[A-Za-z0-9\.]+)\/(\d+|[A-Za-z0-9\.]+)\/?/);
              window.location.replace("{{ url('causas/crear')}}" + "/" + url_parts[2]);
            }
          }
        });
  		});
	</script>
@stop