@extends('master')

@section('content')
    
    <h1>Crear Evento</h1>

    <div class="row">
        <form action="{{ url('/causas/store') }}" method="post" class="form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <p>Descripción:</p>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3">{{ $eventDetails->description }}</textarea>
                    </div>
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