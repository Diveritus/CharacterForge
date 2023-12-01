@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }} <br>
        </div>
    @endif

    <div class="col-12 mt-4 flex flex-wrap">
        @foreach ($personajes as $personaje)
            <div class="card w-full bg-base-100 text-black shadow-xl mb-4 mx-2">
                <div class="card-body p-4">
                    <h2 class="card-title text-lg font-semibold">{{ $personaje->nombre }}</h2>
                    <p class="text-sm">{{ $personaje->clase->name }}</p>
                    <p class="text-sm">{{ $personaje->raza->name }}</p>
                </div>
                <div class="card-actions p-4 border-t border-base-200">
                    <a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning text-xs">Editar</a>
                    <a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info text-xs">Detalles</a>
                    @if($personaje->trashed())
                        <form action="{{ route('personajes.restore', $personaje->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success text-xs">Restaurar</button>
                        </form>
                    @else
                        <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-xs">Eliminar</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection







{{-- @section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }} <br>
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
        
                        @if($personaje->trashed())
                            <form action="{{ route('personajes.restore', $personaje->id) }}" method="POST" class="d-inline">
                                @csrf
                                <!-- Agrega el método DELETE para la restauración -->
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Restaurar</button>
                            </form>
                        @else
                            <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        @endif
                    
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection --}}
