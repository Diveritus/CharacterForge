<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personaje extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'raza_id',
        'clase_id',
        'nivel',
        //'usuario_id',
        'descripcion',
        'stats_id',
        'background_id',
        'habilidad_id',
        'hechizo_id',
        //'equipamiento_id',
        'caracteristica_id',
        'feat_id',
        'historia',
        'habilidades_especiales',
    ];
    public function raza()
    {
        return $this->belongsTo(Races::class, 'raza_id');
    }

    public function clase()
    {
        return $this->belongsTo(Classes::class, 'clase_id');
    }

    public function subclase()
    {
        return $this->belongsTo(Subclass::class, 'subclass_id');
    }

    // public function equipamientos()
    // {
    //     return $this->belongsToMany(Items::class, 'personaje_items');
    // }

    public function stats()
    {
        return $this->hasOne(Stats::class, 'personaje_id');
    }

    public function feat()
    {
        return $this->belongsTo(Feats::class);
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'habilidad_id');
    }

    public function background()
    {
        return $this->belongsTo(Backgrounds::class, 'background_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
