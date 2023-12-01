<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subclass extends Model
{
    use HasFactory;

    public function spells()
    {
        return $this->belongsToMany(Spells::class, 'subclass_spell', 'subclass_id', 'spell_id');
    }
    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'subclase_id');
    }

    public function clase()
    {
        return $this->belongsTo(Classes::class, 'clase_id');
    }
}
