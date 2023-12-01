<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
    use HasFactory;

    public function cantrip()
    {
        return $this->belongsTo(Spells::class)->where('is_cantrip', true);
    }

    public function spells()
    {
        return $this->belongsToMany(Spells::class);
    }

    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'raza_id');
    }
    
}
