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
          <div id="map" style="width: 100%; height: 400px;"></div>
          <div class="row reduceRow">
            <div class="input-field col s12 m12 l12">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Voluntarios Esperados</label>
              </div>
          </div>
          <div class="row reduceRow">
            <div class="input-field col s6">
                  <input placeholder="18 de mayo 8:00 p.m." id="start_time" type="text" value="{{$eventDetails->start_time}}" class="validate">
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
    position: {lat: {{$eventDetails->place->location->latitude}}, lng: {{$eventDetails->place->location->longitude}} },
    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'  
  });
  marker1 = new google.maps.Marker({
    map:map,
    draggable:true,
    animation:google.maps.Animation.DROP,
    position:{lat:{{($eventDetails->place->location->latitude - 0.0010)}}, lng: {{($eventDetails->place->location->longitude + 0.0050)}} }
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
@stop