<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Article::create([
            'title' => 'Infraestructura',
            'description' => 'Este puede ser uno de los medios más controlados, pero eso no implica que sea el que corre menos riesgos, siempre dependerá de los
            procesos que se manejan. Se deben de considerar problemas complejos, como los de un acceso no permitido, robo de identidad, hasta los daños más comunes, por ejemplo, robo del equipo, inundaciones, incendios o cualquier otro desastre natural',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Irving Adrián Torres Pucheta',
        ]);

        \App\Models\Article::create([
            'title' => 'Información',
            'description' => 'La información se considera como el oro de la seguridad informática ya que es lo que se desea proteger y lo que tiene que estar a salvo, en otras palabras, se le dice que es el principal activo.',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Irving Adrián Torres Pucheta',
        ]);

        \App\Models\Article::create([
            'title' => 'Virus Informático',
            'description' => 'Un virus informático es un programa que
            tiene como objetivo dañar o cambiar el funcionamiento de la computadora. Esta es una definición bastante clara, pero el virus informático no siempre tiene que ser un programa completo, puede ser hasta cierto punto fragmentos de un programa.',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Irving Adrián Torres Pucheta',
        ]);

        \App\Models\Article::create([
            'title' => 'Autenticación',
            'description' => 'La autentificación se puede definir como un proceso en el que se busca confirmar algo como verdadero, no se busca verificar un usuario, ya que la autenticación no siempre está relacionada con estos, en muchos casos se quiere saber si un cambio o un dato es correcto, no se debe cometer el error en pensar que solamente las personas necesitan este proceso, este puede ser para cualquiera, un sistema, un
            dispositivo o una persona.',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Felipe de Jesús Zamora Baldazo',
        ]);

        \App\Models\Article::create([
            'title' => 'Confidencialidad',
            'description' => 'La confidencialidad consiste en asegurar que sólo el personal autorizado accede a la información que le corresponde, de este modo cada sistema automático o individuo solo podrá usar los recursos que necesita para ejercer sus
            tareas',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Felipe de Jesús Zamora Baldazo',
        ]);

        \App\Models\Article::create([
            'title' => 'Integridad de la información',
            'description' => ' Es el segundo pilar de la seguridad, consiste en asegurarse de que la información no se pierde ni se ve comprometida voluntaria e involuntariamente',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Felipe de Jesús Zamora Baldazo',
        ]);

        \App\Models\Article::create([
            'title' => 'Riesgo',
            'description' => 'Es la probabilidad de que algo negativo suceda dañando los recursos tangibles o intangibles y por tanto impidiendo desarrollar la labor profesional. ',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Emmanuel Carranza Martínez',
        ]);

        \App\Models\Article::create([
            'title' => 'Privilegios',
            'description' => 'Son permisos de actuación que un usuario, sea una persona o un sistema tiene para actuar sobre otros recursos, la Figura 8 muestra un ejemplo de privilegios asignados a un usuario',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Emmanuel Carranza Martínez',
        ]);

        \App\Models\Article::create([
            'title' => 'Ataque pasivo',
            'description' => 'Consiste en monitorear al sujeto atacado, es un ataque no invasivo ya que no afecta a la infraestructura, pero monitoriza lo que esta puede almacenar o transmitir, incluso información que es directamente pública.',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Emmanuel Carranza Martínez',
        ]);

        \App\Models\Article::create([
            'title' => 'Ataque activo',
            'description' => 'Se caracterizan por acciones directas que tratan de penetrar la infraestructura, e incluso de hacerse estables dentro de ella de forma permanente, los objetivos suelen ser sabotajes, robo de información o despliegue de malware para espionaje o secuestro de equipos para otras actividades de ataque contra terceros objetivos.',
            'reference' => 'Vera Navarrete, D. S., Romero Castro, M. I., Figueroa Morán, G. L., Murillo Quimiz, Á. L., Parrales Anzúles, G. R., Álava Cruzatty, J. E., Castillo Merino, M. A., & Álava Mero, C. J. (2018). INTRODUCCIÓN A LA SEGURIDAD INFORMÁTICA Y EL ANÁLISIS DE VULNERABILIDADES. 3Ciencias.',
            'author' =>  'Emmanuel Carranza Martínez',
        ]);


        
    }
}
