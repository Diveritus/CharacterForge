<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Personaje;
use App\Models\Races;
use App\Models\Classes;
use App\Models\Stats;
use App\Models\Backgrounds;
use App\Models\Subclass;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use illuminate\View\View;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $personajes = Personaje::with([
            'raza',
            'clase',
            'subclase',
            'stats', // Asegúrate de que esta relación se llama 'stats'
            'feat',
            'skills',
            'background',
            'user'])->latest()->get();
        return view('Personaje.index', ['personajes' => $personajes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        
        $razas = Races::all(); 
        $clases = Classes::all();
        $subclases = Subclass::all();
        $subrazas = $razas->where('subrace', true);
        $backgrounds = Backgrounds::all();

        $selectedClassId = request('clase_id');
        $selectedClass = $clases->firstWhere('id', $selectedClassId);

        $subclasesFiltradas = $subclases->where('class_id', $selectedClassId);
        // $selectedClass = Classes::find($selectedClassId);
        // $subclases = $selectedClass ? $selectedClass->subclases : collect();
        
        return view('Personaje.create', compact('razas','subrazas', 'clases', 'backgrounds', 'subclasesFiltradas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([

            //'usuario_id' => 'required|exists:users,id',
            //'stats_id' => 'required|exists:stats,id',      
            //'habilidad_id' => 'required|exists:skills,id',
            //'hechizo_id' => 'nullable|exists:spells,id',
            //'equipamiento_id' => 'nullable|exists:personaje_items,id',
            //'caracteristica_id' => 'nullable|exists:features,id',
            //'feat_id' => 'nullable|exists:feats,id',

            'nombre' => 'required|string|max:75',
            'raza_id' => 'required|exists:races,id',
            'clase_id' => 'required|exists:classes,id',
            'nivel' => 'required|integer|min:1|max:12',
            'descripcion' => 'required|string|max:300',
            'background_id' => 'exists:backgrounds,id',
            'stats.fuerza' => 'required|integer|min:8|max:20',
            'stats.destreza' => 'required|integer|min:8|max:20',
            'stats.constitucion' => 'required|integer|min:8|max:20',
            'stats.inteligencia' => 'required|integer|min:8|max:20',
            'stats.sabiduria' => 'required|integer|min:8|max:20',
            'stats.carisma' => 'required|integer|min:8|max:20',
        ]);
        
        
        $personaje = new Personaje($request->all());
        $personaje->save();

        $stats = new Stats($request->input('stats'));
        $personaje->stats()->save($stats);

        return redirect()->route('personajes.index')
            ->with('success', 'Personaje creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje): View
    {
        return view('Personaje.show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje): View
    {
        return view('Personaje.edit', ['personaje' => $personaje]);
        // $personaje = Personaje::find($id);
        // return view('Personaje.edit', ['personaje' => $personaje]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:75',
            'raza_id' => 'required|exists:races,id',
            'clase_id' => 'required|exists:classes,id',
            'nivel' => 'required|integer|min:1|max:12',
            'usuario_id' => 'required|exists:users,id',
            'descripcion' => 'required|string|max:300',
            'stats_id' => 'required|exists:stats,id',
            'background_id' => 'required|exists:backgrounds,id',
            'habilidad_id' => 'required|exists:skills,id',
            'hechizo_id' => 'nullable|exists:spells,id',
            'equipamiento_id' => 'nullable|exists:personaje_items,id',
            'caracteristica_id' => 'nullable|exists:features,id',
            'feat_id' => 'nullable|exists:feats,id',
            'stats.fuerza' => 'required|integer|min:8|max:20',
            'stats.destreza' => 'required|integer|min:8|max:20',
            'stats.constitucion' => 'required|integer|min:8|max:20',
            'stats.inteligencia' => 'required|integer|min:8|max:20',
            'stats.sabiduria' => 'required|integer|min:8|max:20',
            'stats.carisma' => 'required|integer|min:8|max:20',
        ]);
    
        $stats = Stats::updateOrCreate([], $request->input('stats'));

        $personaje->update($request->all());

        $personaje->stats()->associate($stats);
        $personaje->save();
    
        return redirect()->route('personajes.index')
            ->with('success', 'Personaje actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje): RedirectResponse
    {
        try {
            $personaje->delete();
            return redirect()->route('personajes.index')->with('success', 'Personaje eliminado exitosamente.');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('personajes.index')->with('error', 'No se pudo encontrar el personaje.');
        }
    }

    public function restore($id): RedirectResponse
    {
        $personaje = Personaje::withTrashed()->find($id);

        if ($personaje) {
            $personaje->restore();
            return redirect()->route('personajes.index')->with('success', 'Personaje restaurado exitosamente.');
        }

        return redirect()->route('personajes.index')->with('error', 'No se pudo encontrar el personaje.');
    }

    


}
