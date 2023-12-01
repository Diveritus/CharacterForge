@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Personaje</h2>
        </div>
        <div>
            <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> ¡Oops! Hubo un problema:</h4>
            <p>Faltan rellenar campos:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    @if (Str::contains($error, 'field is required.'))
                        @php
                            $fieldName = str_replace(['The ', ' field is required.'], '', $error);
                        @endphp
                        <li> {{ $fieldName }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personajes.update', ['personaje' => $personaje->id]) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $personaje->nombre }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Raza:</strong> 
                    <input type="text" name="raza" class="form-control" placeholder="Raza" value='{{$personaje->raza}}'>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Clase:</strong>
                    <input type="text" name= "clase" class="form-control" placeholder="Clase" value="{{ $personaje->clase }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Puntos de Golpe:</strong>
                    <input type="number" name="puntos_de_golpe" class="form-control" placeholder="Puntos de Golpe" value="{{ $personaje->puntos_de_golpe }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Puntos de Golpe Temporales:</strong>
                    <input type="number" name="puntos_de_golpe_temporales" class="form-control" placeholder="Puntos de Golpe Temporales" value="{{ $personaje->puntos_de_golpe_temporales }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Trasfondo:</strong>
                    <input type="text" name="trasfondo" class="form-control" placeholder="Trasfondo" value="{{ $personaje->trasfondo }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Historia:</strong>
                    <textarea name="historia" class="form-control" rows="5" placeholder="Historia">{{ $personaje->historia }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Habilidades Especiales:</strong>
                    <textarea name="habilidades_especiales" class="form-control" rows="5" placeholder="Habilidades Especiales">{{ $personaje->habilidades_especiales }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Objetos Mágicos:</strong>
                    <textarea name="objetos_magico" class="form-control" rows="5" placeholder="Objetos Mágicos">{{ $personaje->objetos_magico }}</textarea>
                </div>
            </div>

            <div class="col-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection