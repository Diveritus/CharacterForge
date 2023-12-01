<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feats extends Model
{
    use HasFactory;

    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'feat_id');
    }
}
