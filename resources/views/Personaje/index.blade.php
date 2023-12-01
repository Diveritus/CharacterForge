{{-- 
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DND Character</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }} <br></strong>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Clase</th>
                <th>Raza</th>
                <th>Acción</th>
            </tr>
            @foreach ($personajes as $personaje)
                <tr>
                    <td class="fw-bold">{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->clase->name }}</td>
                    <td>{{ $personaje->raza->name }}</td>
                    <td>
                        <a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info">Detalles</a>

                        <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DND Character</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-success mt-2">
                <strong>{{ Session::get('success') }} <br></strong>
            </div>
        @endif

        <div class="col-12 mt-4">
            <div class="row">
                @foreach ($personajes as $personaje)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $personaje->nombre }}</h5>
                                <p class="card-text"><strong>Clase:</strong> {{ $personaje->clase->name }}</p>
                                <p class="card-text"><strong>Raza:</strong> {{ $personaje->raza->name }}</p>
                                <div class="btn-group" role="group" aria-label="Acciones">
                                    <a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning">Editar</a>
                                    <a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info">Detalles</a>
                                    <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
