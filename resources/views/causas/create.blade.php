@extends('layouts.default')

@section('content')
<div class="container-fluid grey lighten-3">
<div class="container section">
  <form action="{{action('CausaController@store') }}" method="POST">
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <div class="row">

    <div class="col s12 m8 l8">
      @if (count($errors) > 0)
        <div class="card red">
          <div class="card-content white-text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        </div>
      @endif
      <div class="card-panel">

        <div class="row reduceRow">         
          <div class="input-field col s12 m12 l12">
            <input value="{{$eventDetails['name'] or ''}}" id="title" type="text" class="validate">
            <label class="active" for="title">Nombre del Evento</label>
          </div>
        </div>        
        
        <p>Mapa</p>
        <div id="map" style="width: 100%; height: 400px;"></div>
          <div class="row reduceRow">
            <div class="input-field col s12 m12 l12">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Número de Voluntarios Esperados</label>
            </div>
          </div>

          <div class="row reduceRow">
            <div class="input-field col s6">
              <input placeholder="18 de mayo 8:00 p.m." id="start_time" type="date" value="{{$eventDetails['start_time'] or ''}}" class="validate datepicker">
              <label for="start_time">Fecha de Inicio</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="18 de mayo 8:00 p.m." id="end_time" type="date" class="validate datepicker">
              <label for="end_time">Fecha de Fin</label>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col s12">              
              <input type="submit" class="btn-large waves-effect waves-light red" value="Publica tu evento"></input>
            </div>
        </div>
    </div>

    <div class="col s12 m4 l4">
      <div class="card">
        @if(!empty($picture['cover']['source']))
        <div class="card-image">
          <img src="{{ $picture['cover']['source'] }}">
        </div>
        @endif
        <div class="card-content">
          <div class="row reduceRow">
            <div class="input-field s12 m12 l12">
              <textarea id="description" class="materialize-textarea">{{$eventDetails['description'] or ''}}</textarea>
              <label for="description">Descripción</label>
            </div>              
          </div>
        </div>
      </div>
    </div>

  </div>
  </form>
</div>
</div>
@stop

@section('js')
<script type="text/javascript" src="{{URL::asset('js/picker-es.js')}}"></script>
<script>
var $startTime = $('#start_time').pickadate();
var picker = $startTime.pickadate('picker');
picker.set('select', new Date("{{$eventDetails['start_time'] or ''}}"));

var $endTime = $('#end_time').pickadate();
var picker = $endTime.pickadate('picker');
picker.set('select', new Date("{{$eventDetails['end_time'] or ''}}"));

// The following example creates a marker in Stockholm, Sweden using a DROP
// animation. Clicking on the marker will toggle the animation between a BOUNCE
// animation and no animation.
var marker;
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: {{$eventDetails['place']['location']['latitude'] or '-12.0552608'}}, lng: {{$eventDetails['place']['location']['longitude'] or '-77.0627323'}} }
  });
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: {{$eventDetails['place']['location']['latitude'] or '-12.0552608'}}, lng: {{$eventDetails['place']['location']['longitude'] or '-77.0627323'}} },
    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'  
  });
  marker1 = new google.maps.Marker({
    map:map,
    draggable:true,
    animation:google.maps.Animation.DROP,
    position:{lat:{{ isset($eventDetails['place']['location']['latitude']) ? $eventDetails['place']['location']['latitude'] - 0.0010 : '-12.0552608'}}, lng: {{ isset($eventDetails['place']['location']['longitude']) ? $eventDetails['place']['location']['longitude'] + 0.0050 : '-77.0627323'}} }
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvZtQOIf5GmXC4r_DymvtBuYIGdnENXb4&callback=initMap"></script>

@stop