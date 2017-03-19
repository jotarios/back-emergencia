@extends('layouts.default')

@section('content')
<div class="container-fluid grey lighten-3">
<div class="container section">
  <div class="row">
    <div class="col s12 m8 l8">
      <div class="card-panel">
        <div class="row reduceRow">         
                <div class="input-field col s12 m12 l12">
                <input value="{{$eventDetails->name}}" id="title" type="text" class="validate">
                <label class="active" for="title">Nombre del Evento</label>
          </div>
        </div>        
          <p>Mapa</p>
          <div class="row reduceRow">
            <div class="input-field col s12 m12 l12">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Voluntarios Esperados</label>
              </div>
          </div>
          <div class="row reduceRow">
            <div class="input-field col s6">
                  <input placeholder="18 de mayo 8:00 p.m." id="start_time" type="text" class="validate">
                  <label for="start_time">Fecha de Inicio</label>
              </div>
              <div class="input-field col s6">
                  <input placeholder="18 de mayo 8:00 p.m." id="end_time" type="text" class="validate">
                  <label for="end_time">Fecha de Fin</label>
              </div>
          </div>
          </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
            <div class="card-image">
              <img src="{{ $picture->cover->source }}">
            </div>
            <div class="card-content">
                <div class="row reduceRow">
              <div class="input-field s12 m12 l12">
                <textarea id="description" class="materialize-textarea">{{$eventDetails->description}}</textarea>
                <label for="description">Descripción</label>
              </div>              
          </div>
          <div class="row">
            <div class="col s12 m12 l12 center">              
              <a href="#modal1" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-blue red darken-4 z-depth-3 white-text text-darken-4"><strong>Publica tu evento</strong></a>
            </div>
          </div>
            </div>
          </div>
    </div>
  </div>
</div>
</div>

    <h1>Crear Evento</h1>

    <div class="row">
        <form action="{{ url('/causas/store') }}" method="post" class="form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <p>Descripción:</p>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="25">{{$eventDetails->description}}</textarea>
                    </div>
                </div>
                
                <div id="map">
                    
                </div>

                <div class="form-group">
                    <label for="expected_volunteers" class="col-sm-2 control-label">Voluntarios Esperados:</label>
                    <div class="col-sm-10">
                        <input type="text" name="expected_volunteers" id="expected_volunteers" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button id="btn_save_stage" type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop

<script>

// The following example creates a marker in Stockholm, Sweden using a DROP
// animation. Clicking on the marker will toggle the animation between a BOUNCE
// animation and no animation.

var marker;

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: {{$eventDetails->place->location->latitude}}, lng: {{$eventDetails->place->location->longitude}} }
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: {{$eventDetails->place->location->latitude}}, lng: {{$eventDetails->place->location->longitude}} }
  });
  marker1 = new google.maps.Marker({
    map:map,
    draggable:true,
    animation:google.maps.Animation.DROP,
    position:{lat:-12.04, lng:-77.02 }
  });
  marker.addListener('click', toggleBounce);
  marker1.addListener('click',toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
</script>