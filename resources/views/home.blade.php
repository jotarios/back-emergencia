@extends('layouts.default')

@section('content')
    <div class="grey lighten-4 row general-unidos">

      <div class="container">
        <div class="row general-title-unidos">
          <div class="col s12 center unidos-heading">
            <h1>Unidos somos <strong>#unasolafuerza</strong></h1>
          </div>
          <div class="col s12 center unidos-buttons">
            <a href="http://unasolafuerza.pe/#voluntariado" class="waves-effect waves-light heading-button btn-large red" target="_blank">SER VOLUNTARIO</a>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h3>Voluntariados y refugios a nivel nacional</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row" id="eventos">
          <div class="agregar-evento col s12">
            <p class="text-crear-eventos">Hemos reunido las iniciativas de voluntariado para llevar ayuda a donde más lo necisitan. <a class="btn-flat waves-effect btn-large right" data-target="modal_agregar" >Agregar Evento</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col m12">
            <div class="card horizontal">
              <div class="card-image">
                <img src="http://lorempixel.com/100/190/nature/6">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p class="content-title"><b>ANGOLO Y ANCHOR</b></p>
                  <p><i class="small material-icons">language</i> Chosica, Lima</p>
                  <p><i class="small material-icons">perm_contact_calendar</i> Mar 24, 2017</p>
                  <p><i class="small material-icons">av_timer</i> 8:30 pm</p>
                  <p><i class="small material-icons">perm_identity</i> 44 Voluntarios</p>
                  <p><i class="small material-icons">verified_user</i> ORGANIZADO POR LIBELULA PERU</p>
                </div>
                <div class="card-action">
                  <a class="waves-effect btn white black-text"><i class="material-icons left">info_outline</i>Ver más</a>
                  <a class="waves-effect btn white black-text"><i class="material-icons left">theaters</i>Inscribirse</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>


    <!-- Agregar evento modal -->
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
            else {
              window.location.replace("{{ url('causas/crear')}}");
            }
          }
        });
      });
  </script>
@stop