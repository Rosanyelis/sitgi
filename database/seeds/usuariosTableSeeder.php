<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
        	'login'  => 'Rosanyelis Mendoza',
            'password'  => bcrypt('Lila123*'),
            'rol'   => 'Administrador',
            'pregunta'  => 'como se llama mi madre',
            'respuesta'  => 'yelitza'
        ]);
        
        Usuario::insert([
        	'login'  => 'Maria Giraldo',
            'password'  => bcrypt('qwerty123'),
            'rol'   => 'Vendedor',
            'pregunta'  => 'como se llama mi madre',
            'respuesta'  => 'juliana'
        ]);
    }
}
