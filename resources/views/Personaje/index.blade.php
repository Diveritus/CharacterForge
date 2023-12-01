{{-- @extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <x-adminlte-button label="Crear" theme="primary" href="{{ route('personajes.create') }}" />
        </div>
    </div>

    @if (Session::get('success'))
        <x-adminlte-alert theme="success" title="Éxito">
            {{ Session::get('success') }}
        </x-adminlte-alert>
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
                    <x-adminlte-button label="Editar" theme="warning" class="text-xs" href="{{ route('personajes.edit', $personaje->id) }}" />
                    <x-adminlte-button label="Detalles" theme="info" class="text-xs" href="{{ route('personajes.show', $personaje->id) }}" />
                    
                    @if($personaje->trashed())
                        <form action="{{ route('personajes.restore', $personaje->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <x-adminlte-button type="submit" label="Restaurar" theme="success" class="text-xs" />
                        </form>
                    @else
                        <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <x-adminlte-button type="submit" label="Eliminar" theme="danger" class="text-xs" />
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection --}}




@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personajes</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <x-adminlte-button label="Crear" theme="primary" href="{{ route('personajes.create') }}" />
        </div>

        @if (Session::get('success'))
            <x-adminlte-alert theme="success" title="Éxito">
                {{ Session::get('success') }}
            </x-adminlte-alert>
        @endif

        <div class="col-12 mt-4">
            <div class="card-group">
                @foreach ($personajes as $personaje)
                    <div class="card bg-base-100 text-black shadow-xl mb-4 mx-2" style="min-width: 200px;">
                        <div class="card-body p-4">
                            <h2 class="card-title text-lg font-semibold">{{ $personaje->nombre }}</h2>
                            <p class="text-sm">{{ $personaje->clase->name }}</p>
                            <p class="text-sm">{{ $personaje->raza->name }}</p>
                        </div>
                        <div class="card-actions p-4 border-t border-base-200 d-flex justify-content-between">
                            <x-adminlte-button label="Editar" theme="warning" class="text-xs" href="{{ route('personajes.edit', $personaje->id) }}" />
                            <x-adminlte-button label="Detalles" theme="info" class="text-xs" href="{{ route('personajes.show', $personaje->id) }}" />

                            @if($personaje->trashed())
                                <form action="{{ route('personajes.restore', $personaje->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <x-adminlte-button type="submit" label="Restaurar" theme="success" class="text-xs" />
                                </form>
                            @else
                                <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-adminlte-button type="submit" label="Eliminar" theme="danger" class="text-xs" />
                                </form>
                            @endif
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
