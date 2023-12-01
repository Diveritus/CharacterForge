<?php

namespace Database\Seeders;

use App\Models\Subclass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubclassSeeder extends Seeder
{
    public function run(): void
    {
        $subclases = [
            // Barbarian
            ['class_id' => 1, 'name' => 'Berserker', 'descripcion' => 'Descripción para el Bárbaro Berserker'],
            ['class_id' => 1, 'name' => 'Magia Salvaje', 'descripcion' => 'La influencia de la magia salvaje te ha transformado, inundándote con un poder arcano que se agita dentro de ti, esperando ser liberado.'],
            ['class_id' => 1, 'name' => 'Corazon Bestial', 'descripcion' => 'Descripción para el Bárbaro Berserker'],
            
            // Bard
            ['class_id' => 2, 'name' => 'Colegio de Sabiduría', 'descripcion' => 'Los bardos de este colegio buscan conocimiento en todas partes y lo utilizan como su arma más poderosa. Son eruditos y cuentan con una amplia gama de habilidades y conocimientos, desde historias olvidadas hasta secretos arcanos.'],
            ['class_id' => 2, 'name' => 'Colegio de Espadas', 'descripcion' => 'Los bardos de este colegio son maestros en el combate con espadas y utilizan su destreza en el campo de batalla para deslumbrar y derrotar a sus enemigos. Cada movimiento es una danza mortal, y sus actuaciones son tan letales como cautivadoras.'],
            ['class_id' => 2, 'name' => 'Colegio de Valor', 'descripcion' => 'Los bardos de este colegio son guerreros valientes que combinan su habilidad musical con habilidades marciales. Son líderes en el frente de batalla, inspirando a sus aliados con sus canciones mientras enfrentan a sus enemigos con valentía y habilidad.'],

            // Cleric
            ['class_id' => 3, 'name' => 'Dominio del Conocimiento', 'descripcion' => 'Los clérigos de este dominio buscan el conocimiento en todas sus formas. Son eruditos y bibliotecarios, dedicados a la recopilación y preservación del saber. Utilizan su conocimiento para guiar y proteger a su comunidad.'],
            ['class_id' => 3, 'name' => 'Dominio de la Vida', 'descripcion' => 'Los clérigos de este dominio son sanadores y guardianes de la vida. Su conexión con la energía vital les permite curar heridas y traer a los muertos de vuelta a la vida. Son benevolentes y buscan aliviar el sufrimiento de los demás.'],
            ['class_id' => 3, 'name' => 'Dominio de la Luz', 'descripcion' => 'Los clérigos de este dominio son portadores de la luz divina. Luchan contra la oscuridad y disipan las sombras con su poder. Son defensores de la verdad y la justicia, iluminando el camino para aquellos que buscan la luz.'],
            ['class_id' => 3, 'name' => 'Dominio de la Naturaleza', 'descripcion' => 'Los clérigos de este dominio son defensores de la naturaleza y sus ciclos. Tienen una conexión especial con la tierra, el aire, el fuego y el agua. Protegen los bosques, las criaturas y equilibran la relación entre la civilización y la naturaleza.'],
            ['class_id' => 3, 'name' => 'Dominio de la Tempestad', 'descripcion' => 'Los clérigos de este dominio controlan las fuerzas de la tempestad y el clima. Son adoradores de los elementos, capaces de desatar tormentas y relámpagos en la batalla. Son impredecibles y poderosos, manifestando la furia de la naturaleza.'],
            ['class_id' => 3, 'name' => 'Dominio del Engaño', 'descripcion' => 'Los clérigos de este dominio son astutos y maestros del engaño. Utilizan sus habilidades para infiltrarse, obtener información y desorientar a sus enemigos. Sirven a deidades de la astucia y la intriga.'],
            ['class_id' => 3, 'name' => 'Dominio de la Guerra', 'descripcion' => 'Los clérigos de este dominio son guerreros sagrados y estrategas. Luchan en el frente de batalla, inspirando a sus aliados y liderando a las fuerzas divinas en la guerra. Son leales y valientes, comprometidos con la defensa de su fe.'],

            // Druid
            ['class_id' => 4, 'name' => 'Círculo de la Tierra', 'descripcion' => 'Los druidas de este círculo están profundamente conectados con la tierra y sus fuerzas. Pueden comunicarse con la tierra, controlar la vegetación y canalizar la energía de la naturaleza. Son guardianes de la tierra y protectores de su equilibrio.'],
            ['class_id' => 4, 'name' => 'Círculo de la Luna', 'descripcion' => 'Los druidas de este círculo veneran la luna y sus misterios. Son cambiantes y pueden transformarse en criaturas de la noche. Poseen un vínculo especial con las bestias nocturnas y la magia lunar.'],
            ['class_id' => 4, 'name' => 'Círculo de las Esporas', 'descripcion' => 'Los druidas de este círculo manipulan las esporas y los hongos en beneficio propio. Pueden generar esporas curativas o tóxicas, controlar criaturas fungales y resistir condiciones adversas. Son maestros de la vida y la muerte en el reino de los hongos.'],

            // Fighter
            ['class_id' => 5, 'name' => 'Maestro de Batalla', 'descripcion' => 'Los guerreros de este camino son estrategas y líderes en el campo de batalla. Dominan tácticas avanzadas, inspiran a sus compañeros y pueden cambiar el curso de una batalla con su ingenio militar.'],
            ['class_id' => 5, 'name' => 'Campeón', 'descripcion' => 'Los guerreros de este camino son expertos en el combate cuerpo a cuerpo. Poseen una habilidad innata para el combate y se destacan en la precisión y el poder de sus golpes.'],
            ['class_id' => 5, 'name' => 'Caballero Eldritch', 'descripcion' => 'Estos guerreros fusionan el arte de la guerra con el poder de la magia. Aprenden a lanzar hechizos mientras se mantienen hábiles en el combate. Son una fuerza versátil que combina lo mejor de la espada y la magia.'],

            // Monk
            ['class_id' => 6, 'name' => 'Camino de la Mano Abierta', 'descripcion' => 'Los monjes de este camino son maestros de las artes marciales, especializados en técnicas que desarmarán y deshabilitarán a sus enemigos. Son ágiles y precisos, utilizando su destreza para superar a sus adversarios.'],
            ['class_id' => 6, 'name' => 'Camino de las Sombras', 'descripcion' => 'Los monjes de este camino se sumergen en la oscuridad y la astucia. Utilizan las sombras para camuflarse, sorprender a sus enemigos y desaparecer sin dejar rastro. Son espías y asesinos eficientes.'],
            ['class_id' => 6, 'name' => 'Camino de los Cuatro Elementos', 'descripcion' => 'Los monjes de este camino canalizan la energía de los elementos para realizar proezas místicas. Pueden convocar llamas, controlar el aire y manipular la tierra. Son equilibrados y versátiles, adaptándose a las situaciones con facilidad.'],

            // Paladin
            ['class_id' => 7, 'name' => 'Juramento de los Antiguos', 'descripcion' => 'Los paladines de este juramento son defensores de la naturaleza y la luz. Juramentan proteger la belleza y la esperanza en el mundo, combatiendo la oscuridad con su luminosa devoción. Son sanadores y guerreros de la luz.'],
            ['class_id' => 7, 'name' => 'Juramento de Devoción', 'descripcion' => 'Los paladines de este juramento son modelos de virtud y honor. Siguen un código estricto de conducta y defienden la justicia con valentía. Son leales y protectores de los débiles.'],
            ['class_id' => 7, 'name' => 'Juramento de Venganza', 'descripcion' => 'Los paladines de este juramento buscan venganza contra aquellos que han causado gran mal. Son cazadores de aquellos que han escapado a la justicia y juran acabar con ellos. Son implacables en su búsqueda de la retribución.'],
            ['class_id' => 7, 'name' => 'Juramento Roto', 'descripcion' => 'Estos paladines han roto su juramento original y han adoptado un camino más oscuro. Pueden seguir sus propios códigos y buscar poder a cualquier costo. Son renegados y a menudo enfrentan el rechazo de otros paladines.'],

            // Ranger
            ['class_id' => 8, 'name' => 'Cazador', 'descripcion' => 'Los exploradores de este tipo son expertos cazadores y rastreadores. Se especializan en eliminar amenazas específicas, ya sea monstruos, bestias o seres malignos. Son hábiles en la supervivencia y la caza.'],
            ['class_id' => 8, 'name' => 'Amo Bestias', 'descripcion' => 'Los exploradores de este tipo tienen un vínculo especial con las bestias y criaturas de la naturaleza. Pueden domesticar y entrenar animales para que los ayuden en sus aventuras. Son compañeros leales y aliados en el combate.'],
            ['class_id' => 8, 'name' => 'Acechador Oscuro', 'descripcion' => 'Los exploradores de este tipo se especializan en acechar y atacar desde las sombras. Son sigilosos y expertos en emboscar a sus enemigos. Pueden moverse rápidamente y sin ser vistos en entornos oscuros.'],

            // Pícaro
            ['class_id' => 9, 'name' => 'Embaucador Arcano', 'descripcion' => 'Los pícaros de esta subclase son maestros de la astucia y la magia. Utilizan trucos arcanos para engañar a sus enemigos y salirse con la suya. Pueden lanzar hechizos ilusorios y confundir a sus oponentes.'],
            ['class_id' => 9, 'name' => 'Ladrón', 'descripcion' => 'Los pícaros de esta subclase son especialistas en el arte del robo y la infiltración. Son sigilosos y hábiles en el desplazamiento silencioso. Pueden desarmar trampas y abrir cerraduras con facilidad.'],
            ['class_id' => 9, 'name' => 'Asesino', 'descripcion' => 'Los pícaros de esta subclase son mortíferos en el arte del asesinato. Se especializan en ataques sigilosos y letales, buscando eliminar a sus objetivos con eficiencia. Pueden envenenar sus armas y actuar en las sombras.'],

            // Hechicero
            ['class_id' => 10, 'name' => 'Línea de Sangre Draconiana', 'descripcion' => 'Los hechiceros de esta subclase tienen la sangre de los dragones corriendo por sus venas. Pueden invocar poderes draconianos, como escamas protectoras y alientos mágicos. Son hábiles lanzadores de hechizos con una conexión innata con la magia de los dragones.'],
            ['class_id' => 10, 'name' => 'Magia Salvaje', 'descripcion' => 'La influencia de la magia salvaje ha transformado a estos hechiceros, inundándolos con un poder arcano impredecible. Sus hechizos pueden manifestarse de maneras inesperadas, tanto para bien como para mal. Deben aprender a controlar y canalizar esta magia caótica.'],
            ['class_id' => 10, 'name' => 'Hechicería de Tormenta', 'descripcion' => 'Los hechiceros de esta subclase canalizan la furia de las tormentas en sus hechizos. Pueden conjurar relámpagos, controlar el clima y desatar la fuerza de los elementos. Son lanzadores de hechizos versátiles con el poder de la tormenta a su disposición.'],

            // Brujo
            ['class_id' => 11, 'name' => 'El Fey', 'descripcion' => 'Los brujos de esta subclase han hecho un pacto con seres feéricos y misteriosos. Tienen la capacidad de encantar y confundir a sus enemigos con ilusiones y encantamientos feéricos. Pueden invocar aliados feéricos para que los ayuden en la batalla.'],
            ['class_id' => 11, 'name' => 'El Infernal', 'descripcion' => 'Los brujos de esta subclase han sellado un pacto con seres infernales. Poseen el poder del fuego y la maldición infernal. Pueden invocar llamas y lanzar maldiciones ardientes sobre sus enemigos.'],
            ['class_id' => 11, 'name' => 'El Antiguo', 'descripcion' => 'Los brujos de esta subclase han establecido un pacto con seres antiguos y cósmicos. Poseen conocimientos arcanos ancestrales y pueden influenciar las mentes de aquellos que los rodean. Pueden invocar poderes cósmicos en sus hechizos.'],

            // Mago
            ['class_id' => 12, 'name' => 'Escuela de Abjuración', 'descripcion' => 'Los magos de esta escuela se especializan en la magia defensiva y la protección. Pueden crear barreras mágicas, disipar hechizos y proteger a sí mismos y a otros contra amenazas arcanas.'],
            ['class_id' => 12, 'name' => 'Escuela de Conjuración', 'descripcion' => 'Los magos de esta escuela son maestros en la invocación y manipulación de criaturas y objetos mágicos. Pueden convocar aliados, crear portales y manipular la realidad mediante la conjuración.'],
            ['class_id' => 12, 'name' => 'Escuela de Adivinación', 'descripcion' => 'Los magos de esta escuela tienen la capacidad de prever el futuro y conocer secretos ocultos. Pueden ver visiones del mañana, lanzar hechizos de adivinación y manipular el tiempo de manera limitada.'],
            ['class_id' => 12, 'name' => 'Escuela de Encantamiento', 'descripcion' => 'Los magos de esta escuela se especializan en hechizos de encantamiento y control mental. Pueden influenciar las mentes de otros, crear ilusiones convincentes y controlar criaturas con su magia.'],
            ['class_id' => 12, 'name' => 'Escuela de Evocación', 'descripcion' => 'Los magos de esta escuela son expertos en la creación y manipulación de energía mágica. Pueden lanzar hechizos que infligen daño directo, controlar el clima y desatar explosiones mágicas.'],
            ['class_id' => 12, 'name' => 'Escuela de Ilusiones', 'descripcion' => 'Los magos de esta escuela son maestros en la creación de ilusiones y engaños mágicos. Pueden crear imágenes convincentes, espejismos y cambiar la percepción de la realidad.'],
            ['class_id' => 12, 'name' => 'Escuela de Nigromancia', 'descripcion' => 'Los magos de esta escuela se especializan en la magia de la muerte y la manipulación de energía negra. Pueden controlar no muertos, drenar la energía vital y lanzar hechizos de daño necrótico.'],
            ['class_id' => 12, 'name' => 'Escuela de Transmutación', 'descripcion' => 'Los magos de esta escuela pueden alterar la forma de las cosas y transformar la realidad. Pueden cambiar la estructura de objetos, transformar criaturas y manipular la esencia misma de la materia.'],
        ];

        foreach ($subclases as $subclase) {
            Subclass::create($subclase);
        }
    }
}
