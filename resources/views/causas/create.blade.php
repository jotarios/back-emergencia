@extends('master')

@section('content')
     <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 60%;
      }
    </style>
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
    position: {lat: {{$eventDetails->place->location->latitude}}, lng: {{$eventDetails->place->location->longitude}} },
    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'  
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