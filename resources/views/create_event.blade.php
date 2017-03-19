@extends('layouts.default')

@section('content')
<div class="container-fluid grey lighten-3">
<div class="container section">
	<div class="row">
		<div class="col s12 m8 l8">
			<div class="card-panel">
				<div class="row reduceRow">					
	          		<div class="input-field col s12 m12 l12">
		      			<input value="Alvin" id="title" type="text" class="validate">
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
              <img src="http://materializecss.com/images/sample-1.jpg">
            </div>
            <div class="card-content">
              	<div class="row reduceRow">
			        <div class="input-field s12 m12 l12">
			          <textarea id="description" class="materialize-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
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
@stop