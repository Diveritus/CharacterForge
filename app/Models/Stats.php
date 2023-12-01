<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $fillable = ['fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma'];
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            foreach (['fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma'] as $stat) {
                $model->$stat = max(8, min($model->$stat, 20));
            }
        });

        
    }

    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'personaje_id');
    }
}
