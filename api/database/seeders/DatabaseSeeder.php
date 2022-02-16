<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            ['phrase' => 'No temo las computadoras. Temo la falta de ellas.', 'author' => 'Isaac Asimov'],
            ['phrase' => 'La tecnología es un siervo útil, pero un amo peligroso.', 'author' => 'Christian Lous Lange'],
            ['phrase' => 'La tecnología y las redes sociales han traído el poder a la gente.', 'author' => 'Marcos McKinnon'],
            ['phrase' => 'La tecnología no es nada. Lo importante es que tengas fe en la gente, que sean básicamente buenas e inteligentes, y si les das herramientas, harán cosas maravillosas con ellas.',
                'author' => 'Steve Jobs'],
            ['phrase' => 'El progreso tecnológico solo nos ha proporcionado medios más eficientes para ir hacia atrás.',
                'author' => 'Aldous Huxley'],
            ['phrase' => 'La tecnología es un sirviente útil, pero un jefe peligroso.', 'author' => 'Christian Lous Lange'],
            ['phrase' => 'El espíritu humano debe prevalecer sobre la tecnología.', 'Albert Einstein'],
            ['phrase' => 'La tecnología es solo una herramienta. En términos de llevar a los niños a trabajar juntos y motivarlos, el profesor es el más importante.',
                'author' => 'Bill Gates'],
            ['phrase' => 'Internet es tan grande, tan poderoso y sin sentido que para algunas personas es un sustituto completo para toda la vida.',
                'author' => 'Andrew Brown'],
            ['phrase' => 'Incluso cuando te tomas unas vacaciones de la tecnología, la tecnología no se toma un descanso de ti.',
                'author' => 'Douglas Coupland'],
            ['phrase' => 'La tecnología es destructiva solo en las manos de las personas que no se dan cuenta de que son uno y que están en el mismo proceso que el universo.',
                'author' => 'Alan Watts'],
            ['phrase' => 'Cualquier tecnología suficientemente avanzada es equivalente a la magia.', 'author' => 'Sir Arthur C. Clarke'],
            ['phrase' => 'La tecnología se alimenta a sí misma. La tecnología hace posible más tecnología.', 'author' => 'Alvin Toffler'],
            ['phrase' => 'El problema real no es si las máquinas piensan, sino si lo hacen los hombres.', 'author' => 'B. F. Skinner'],
            ['phrase' => 'El verdadero peligro no es que las computadoras comenzarán a pensar como los hombres, sino que los hombres comenzarán a pensar como las computadoras.',
                'author' => 'Sydney J. Harris'],
            ['phrase' => 'El gran mito de nuestro tiempo es que la tecnología es la comunicación.', 'author' => 'Libby Larsen'],
            ['phrase' => 'La educación fabrica máquinas que actúan como hombres y produce hombres que actúan como máquinas.',
                'author' => 'Erich Fromm'],
            ['phrase' => 'Se ha vuelto terriblemente obvio que nuestra tecnología ha superado nuestra humanidad.', 'author' => 'Albert Einstein'],
            ['phrase' => 'La tecnología nos está enseñando a ser humanos de nuevo.', 'author' => 'Simon Mainwaring'],
            ['phrase' => 'La producción de demasiadas cosas útiles da lugar a demasiadas personas inútiles.', 'author' => 'Karl Marx'],
            ['phrase' => 'La tecnología es mejor cuando reúne a la gente.', 'author' => 'Matt Mullenweg'],
            ['phrase' => 'La tecnología es siempre un arma de doble filo. Traerá muchos beneficios, pero también muchos desastres.',
                'author' => 'Alan Moore'],
            ['phrase' => 'Una máquina puede hacer el trabajo de cincuenta hombres ordinarios. Ninguna máquina puede hacer el trabajo de un hombre extraordinario.',
                'author' => 'Elbert Hubbard'],
            ['phrase' => 'La ciencia de hoy es la tecnología del mañana.', 'author' => 'Edward Teller'],
            ['phrase' => 'La tecnología es una palabra que describe algo que no funciona todavía.', 'author' => 'Douglas Adams'],
            ['phrase' => 'La ciencia y la tecnología revolucionan nuestras vidas, pero la memoria, la tradición y el mito enmarcan nuestras respuestas.',
                'author' => 'Arthur M. Schlesinger'],
            ['phrase' => 'Cada aspecto de la tecnología humana tiene un lado oscuro, incluyendo el arco y la flecha.',
                'author' => 'Margaret Atwood'],
            ['phrase' => 'Tanta tecnología, tan poco talento.', 'author' => 'Vernor Vinge'],
            ['phrase' => 'Tienes que aprender a aprovechar la tecnología para poder usarla para cosas positivas sin estar desconectado de la naturaleza.',
                'author' => 'Talib Kweli'],
            ['phrase' => 'El gran motor del cambio – la tecnología.', 'author' => 'Alvin Toffler'],
        ]);
    }
}
