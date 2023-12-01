<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'classes_features');
    }

    public function personajes()
    {
        return $this->belongsToMany(Personaje::class, 'personaje_feature');
    }
}
