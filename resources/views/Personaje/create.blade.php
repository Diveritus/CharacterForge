{{-- @extends('layouts.base')

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
            <strong>¡Oops!</strong> Hubo un problema:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personajes.store') }}" method="POST">
        @csrf <!-- Agrega el token CSRF -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Raza:</strong>
                    <select name="raza_id" class="form-control" id="raza_id">
                        @foreach ($subrazas as $subraza)
                            <option value="{{ $subraza->id }}" @if (old('raza_id') == $subraza->id) selected @endif>{{ $subraza->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Clase:</strong>
                    <select name="clase_id" id="clase_id" class="form-control">
                        @foreach ($clases as $clase)
                            <option value="{{ $clase->id }}">{{ $clase->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Subclase:</strong>
                    <select name="subclase_id" id="subclase_id" class="form-control">
                        @foreach ($subclasesFiltradas as $subclase)
                        {{ dd($subclasesFiltradas) }}
                            <option value="{{ $subclase->id }}">{{ $subclase->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Nivel:</strong>
                    <input type="number" name="nivel" class="form-control" value="{{ old('nivel') }}" min="1" max="12">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Fuerza:</strong>
                    <input type="number" name="stats[fuerza]" class="form-control"  value="{{ old('stats.fuerza') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Destreza:</strong>
                    <input type="number" name="stats[destreza]" class="form-control" value="{{ old('stats.destreza') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Constitucion:</strong>
                    <input type="number" name="stats[constitucion]" class="form-control" value="{{ old('stats.constitucion') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Inteligencia:</strong>
                    <input type="number" name="stats[inteligencia]" class="form-control"  value="{{ old('stats.inteligencia') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Sabiduria:</strong>
                    <input type="number" name="stats[sabiduria]" class="form-control" value="{{ old('stats.sabiduria') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Carisma:</strong>
                    <input type="number" name="stats[carisma]" class="form-control" value="{{ old('stats.carisma') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Trasfondo:</strong>
                    <select name="background_id" class="form-control">
                        @foreach ($backgrounds as $background)
                            <option value="{{ $background->id }}" {{ old('background_id') == $background->id ? 'selected' : '' }}>
                                {{ $background->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea name="descripcion" class="form-control" rows="5" placeholder="Descripcion">{{ old('descripcion') }}</textarea>
                </div>
            </div>
            
            <div class="col-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>

                <button class="btn">Button</button>
            </div>
        </div>
    </form>
</div>
@endsection

 --}}
 @extends('adminlte::page')

@section('title', 'Crear Personaje')

@section('content_header')
    <h1>Creación de Personaje</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> ¡Oops! Hubo un problema:</h4>
            <p>Algunos campos tienen problemas</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personajes.store') }}" method="POST">
        @csrf <!-- Agrega el token CSRF -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Raza:</strong>
                    <select name="raza_id" class="form-control" id="raza_id">
                        @foreach ($subrazas as $subraza)
                            <option value="{{ $subraza->id }}" @if (old('raza_id') == $subraza->id) selected @endif>{{ $subraza->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Clase:</strong>
                    <select name="clase_id" id="clase_id" class="form-control">
                        @foreach ($clases as $clase)
                            <option value="{{ $clase->id }}">{{ $clase->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Subclase:</strong>
                    <select name="subclase_id" id="subclase_id" class="form-control">
                        @foreach ($subclasesFiltradas as $subclase)
                            <option value="{{ $subclase->id }}">{{ $subclase->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Nivel:</strong>
                    <input type="number" name="nivel" class="form-control" value="{{ old('nivel') }}" min="1" max="12">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Fuerza:</strong>
                    <input type="number" name="stats[fuerza]" class="form-control"  value="{{ old('stats.fuerza') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Destreza:</strong>
                    <input type="number" name="stats[destreza]" class="form-control" value="{{ old('stats.destreza') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Constitucion:</strong>
                    <input type="number" name="stats[constitucion]" class="form-control" value="{{ old('stats.constitucion') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Inteligencia:</strong>
                    <input type="number" name="stats[inteligencia]" class="form-control"  value="{{ old('stats.inteligencia') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Sabiduria:</strong>
                    <input type="number" name="stats[sabiduria]" class="form-control" value="{{ old('stats.sabiduria') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <strong>Carisma:</strong>
                    <input type="number" name="stats[carisma]" class="form-control" value="{{ old('stats.carisma') }}" min="8" max="20">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Trasfondo:</strong>
                    <select name="background_id" class="form-control">
                        @foreach ($backgrounds as $background)
                            <option value="{{ $background->id }}" {{ old('background_id') == $background->id ? 'selected' : '' }}>
                                {{ $background->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea name="descripcion" class="form-control" rows="5" placeholder="Descripción">{{ old('descripcion') }}</textarea>
                </div>
            </div>

            <div class="col-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection

