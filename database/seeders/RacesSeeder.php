<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Races;
use Illuminate\Database\Seeder;

class RacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Races::create([
            'name' => 'Humano',
            'speed' => 9,
            'subrace' => false,
            'descripcion' => 'La cara más común de ver Faerum, los humanos son conocidos por su tenacidad, creatividad y capacidad infinita de crecimiento.',
        ]);

        Races::create([
            'name' => 'Elfo',
            'speed' => 9,
            'subrace' => false,
            'descripcion' => 'Con una apariencia etérea y largas expectativas de vida, los elfos se sienten en armonía con el poder de la naturaleza, prosperando tanto en la luz como en la oscuridad.',
        ]);

        Races::create([
            'name' => 'Alto Elfo',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Elfos que encuentran su hogar en los bosques, expertos arqueros y amantes de la vida silvestre.',
        ]);

        Races::create([
            'name' => 'Elfo del bosque',
            'speed' => 11,
            'subrace' => true,
            'descripcion' => 'A stout and tough race with a strong affinity for craftsmanship.',
        ]);

        Races::create([
            'name' => 'Drow',
            'speed' => 9,
            'subrace' => false,
            'descripcion' => 'Elfos oscuros que habitan en las profundidades, conocidos por su destreza y afinidad con la magia oscura.',
        ]);
        
        Races::create([
            'name' => 'Drow Acólito de Lolth',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Drow devotos de Lolth, la Reina Araña, con habilidades sacerdotales y astucia.',
        ]);
        
        Races::create([
            'name' => 'Drow Seldarine',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Drow que han rechazado las sendas oscuras, siguiendo a los dioses benevolentes del Seldarine.',
        ]);

        Races::create([
            'name' => 'SemiElfo',
            'speed' => 9,
            'subrace' => false,
            'descripcion' => 'Descendientes de humanos y elfos, combinando la versatilidad de ambas razas.',
        ]);

        Races::create([
            'name' => 'Medio Elfo Alto',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Semielfos con la gracia y nobleza de los altos elfos.',
        ]);

        Races::create([
            'name' => 'Medio Elfo del Bosque',
            'speed' => 11,
            'subrace' => true,
            'descripcion' => 'Semielfos que comparten la afinidad de los elfos del bosque con la naturaleza.',
        ]);

        Races::create([
            'name' => 'Semielfo Drow',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Semielfos con rasgos oscuros heredados de los drow.',
        ]);

        Races::create([
            'name' => 'Tiefling',
            'speed' => 9,
            'subrace' => false,
            'descripcion' => 'Descendientes de seres infernales, poseen características demoníacas y una conexión con el inframundo.',
        ]);

        Races::create([
            'name' => 'Tiefling Asmodeo',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Tieflings con un linaje vinculado al poderoso señor demonio Asmodeo.',
        ]);
        
        Races::create([
            'name' => 'Tiefling Mefistófeles',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Tieflings cuyos ancestros están relacionados con Mefistófeles, el archidiablo astuto.',
        ]);

        Races::create([
            'name' => 'Tiefling Zariel',
            'speed' => 9,
            'subrace' => true,
            'descripcion' => 'Tieflings con la influencia de Zariel, un archidiablo guerrero y conquistador.',
        ]);
        
        

        //\App\Models\Races::factory(10)->create();
    }

    
}
