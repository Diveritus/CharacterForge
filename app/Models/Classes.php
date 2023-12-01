<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function spells()
    {
        return $this->belongsToMany(Spells::class, 'class_spell', 'class_id', 'spell_id');
    }
    
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'classes_features');
    }
    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'clase_id');
    }

    public function subclases()
    {
        return $this->hasMany(Subclass::class, 'clase_id');
    }
}
