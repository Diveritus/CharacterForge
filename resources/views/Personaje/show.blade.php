@extends('adminlte::page')

@section('title', 'Detalles del Personaje')

@section('content_header')
    <h1>Detalles del Personaje</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $personaje->nombre }}</h2>
                <p class="card-text"><strong>Raza:</strong> {{ $personaje->raza ? $personaje->raza->name : 'N/A' }}</p>

                <p class="card-text"><strong>Clase:</strong> {{ $personaje->clase ? $personaje->clase->name : 'N/A' }}</p>

                <p class="card-text"><strong>Subclase:</strong> {{ $personaje->subclase ? $personaje->subclase->name : 'N/A' }}</p>
                <p class="card-text"><strong>Nivel:</strong> {{ $personaje->nivel }}</p>
                <p class="card-text"><strong>Fuerza:</strong> {{ $personaje->stats['fuerza'] }}</p>
                <p class="card-text"><strong>Destreza:</strong> {{ $personaje->stats['destreza'] }}</p>
                <p class="card-text"><strong>Constitución:</strong> {{ $personaje->stats['constitucion'] }}</p>
                <p class="card-text"><strong>Inteligencia:</strong> {{ $personaje->stats['inteligencia'] }}</p>
                <p class="card-text"><strong>Sabiduría:</strong> {{ $personaje->stats['sabiduria'] }}</p>
                <p class="card-text"><strong>Carisma:</strong> {{ $personaje->stats['carisma'] }}</p>
                <p class="card-text"><strong>Trasfondo:</strong> {{ $personaje->background ? $personaje->background->name : 'N/A' }}</p>
                <p class="card-text"><strong>Descripción:</strong> {{ $personaje->descripcion }}</p>
            </div>
        </div>
    </div>
</div>
@endsection