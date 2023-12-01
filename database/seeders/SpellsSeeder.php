<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Spells;
use Illuminate\Database\Seeder;

class SpellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spells::create([
            'nombre' => 'Mano del Mago',
            'escuela' => 'Conjuración',
            'rango' => '18 m',
            'duracion' => '1 minuto',
            'level' => 0,
            'descripcion' => 'Mano mágica que puede manipular objetos a distancia',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Salpicadura Ácida',
            'escuela' => 'Conjuración',
            'rango' => '18 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Conjuras un salpicón de ácido que se arroja hacia un objetivo cercano.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Guardia de Cuchillas',
            'escuela' => 'Abjuración',
            'rango' => 'Personal',
            'duracion' => '2 turno',
            'level' => 0,
            'descripcion' => 'Te rodeas con una energía mágica que reduce el daño de los ataques físicos.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Helada hasta los huesos',
            'escuela' => 'Nigromancia',
            'rango' => '18 m',
            'duracion' => '1 turno',
            'level' => 0,
            'descripcion' => 'Enfriamiento sobrenatural que toca a un objetivo y le causa incomodidad.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Luces Danzantes',
            'escuela' => 'Evocación',
            'rango' => '18 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Creas luces que flotan en el aire, proporcionando iluminación suave.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Descarga sobrenatural',
            'escuela' => 'Evocación',
            'rango' => '18 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Lanzas una ráfaga de energía arcana hacia tu objetivo.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Rayo de Fuego',
            'escuela' => 'Evocación',
            'rango' => '18 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Disparas un rayo de fuego hacia un punto específico.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Amigos',
            'escuela' => 'Encantamiento',
            'rango' => '9 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Ganas la amistad momentánea de una criatura, haciéndola más receptiva a tus sugerencias.',
            'is_cantrip' => true,
        ]);
        Spells::create([
            'nombre' => 'Guía',
            'escuela' => 'Adivinación',
            'rango' => '1.5 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Proporcionas orientación divina, otorgando un impulso a las habilidades de otra criatura.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Luz',
            'escuela' => 'Evocación',
            'rango' => '1.5 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Creas luz en un objeto o área, disipando la oscuridad circundante.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Ilusión Menor',
            'escuela' => 'Ilusión',
            'rango' => '18 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Creas ilusiones simples para engañar los sentidos de los observadores.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Rociada Venenosa ',
            'escuela' => 'Conjuración',
            'rango' => '3 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Rocías veneno hacia un objetivo cercano.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Producir flama',
            'escuela' => 'Evocación',
            'rango' => 'Personal',
            'duracion' => 'Hasta el siguiente descanso largo',
            'level' => 0,
            'descripcion' => 'Creas una llama que puedes manipular a tu voluntad.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Rayo de Escarcha',
            'escuela' => 'Evocación',
            'rango' => '18 m',
            'duracion' => '1 turno',
            'level' => 0,
            'descripcion' => 'Lanzas un rayo de frío que puede ralentizar a tu objetivo.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Resistencia',
            'escuela' => 'Abjuración',
            'rango' => '1.5 m',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Concedes resistencia a daños a una criatura tocada.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Llama Sagrada',
            'escuela' => 'Evocación',
            'rango' => '18 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Invocas una llama divina que inflige daño a criaturas cercanas.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Garrote Místico',
            'escuela' => 'Transmutación',
            'rango' => 'Personal',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Transformas un bastón en un garrote mágico.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Agarre Impactante',
            'escuela' => 'Evocación',
            'rango' => '1.5 m',
            'duracion' => '1 turno',
            'level' => 0,
            'descripcion' => 'Tocas a tu objetivo con electricidad, aturdiéndolo momentáneamente.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Taumaturgia',
            'escuela' => 'Transmutación',
            'rango' => 'Personal',
            'duracion' => '10 turnos',
            'level' => 0,
            'descripcion' => 'Realizas pequeños milagros, alterando las condiciones ambientales a tu alrededor.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Látigo de Espinas',
            'escuela' => 'Transmutación',
            'rango' => '9 m',
            'duracion' => 'Instantáneo',
            'level' => 0,
            'descripcion' => 'Creas un látigo hecho de espinas que puedes usar para atacar a distancia.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Golpe Verdadero',
            'escuela' => 'Adivinación',
            'rango' => '18 m',
            'duracion' => '2 turnos',
            'level' => 0,
            'descripcion' => 'Obtienes una breve visión del futuro, mejorando tu capacidad para golpear a tu objetivo.',
            'is_cantrip' => true,
        ]);
		Spells::create([
            'nombre' => 'Burla viciosa',
            'escuela' => 'Encantamiento',
            'rango' => '18 m',
            'duracion' => '1 turno',
            'level' => 0,
            'descripcion' => 'Insultas a una criatura, distraiéndola y debilitando su moral.',
            'is_cantrip' => true,
        ]);
    }
}
