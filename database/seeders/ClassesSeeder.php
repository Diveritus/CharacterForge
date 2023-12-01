<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    public function run(): void
    {
        $clases = [
            ['name' => 'Bárbaro', 'descripcion' => 'Maestro de la furia desatada en combate cuerpo a cuerpo.', 'has_subclasses' => true],
            ['name' => 'Bardo', 'descripcion' => 'Artista versátil y maestro de las habilidades sociales y mágicas.', 'has_subclasses' => true],
            ['name' => 'Clérigo', 'descripcion' => 'Sirviente divino que canaliza el poder de los dioses para curar y dañar.', 'has_subclasses' => true],
            ['name' => 'Druida', 'descripcion' => 'Guardián de la naturaleza con habilidades místicas y transformación animal.', 'has_subclasses' => true],
            ['name' => 'Guerrero', 'descripcion' => 'Maestro de armas y tácticas marciales en el campo de batalla.', 'has_subclasses' => true],
            ['name' => 'Monje', 'descripcion' => 'Maestro de las artes marciales y disciplinas espirituales.', 'has_subclasses' => true],
            ['name' => 'Paladín', 'descripcion' => 'Caballero devoto con poderes divinos y juramentos sagrados.', 'has_subclasses' => true],
            ['name' => 'Explorador', 'descripcion' => 'Experto en la naturaleza y el combate a larga distancia.', 'has_subclasses' => true],
            ['name' => 'Pícaro', 'descripcion' => 'Astuto y sigiloso, especializado en engaño y ataques sorpresa.', 'has_subclasses' => true],
            ['name' => 'Hechicero', 'descripcion' => 'Manipulador de magia innata con sangre mágica o pactos sobrenaturales.', 'has_subclasses' => true],
            ['name' => 'Brujo', 'descripcion' => 'Conjurador que obtiene poder de pactos con entidades sobrenaturales.', 'has_subclasses' => true],
            ['name' => 'Mago', 'descripcion' => 'Estudioso y lanzador de hechizos, maestro de la magia arcanca.', 'has_subclasses' => true],
        ];

        foreach ($clases as $clase) {
            Classes::create($clase);
        }
    }
}