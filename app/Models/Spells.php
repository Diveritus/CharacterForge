<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    use HasFactory;

    public function races()
    {
        return $this->belongsToMany(Races::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'class_spell', 'spell_id', 'class_id');
    }

    public function subclasses()
    {
        return $this->belongsToMany(Subclass::class, 'subclass_spell', 'spell_id', 'subclass_id');
    }
    
}
