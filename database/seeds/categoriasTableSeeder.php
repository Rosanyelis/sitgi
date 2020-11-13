<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class categoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Categoria::insert([
            'nombre'  => 'Construcción',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elita.'
        ]);

        Categoria::insert([
            'nombre'  => 'Cocina',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Jardinería',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Albañíleria',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Soldadura',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Pinturas',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Escalas y Andamios',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Equipos de Limpieza',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Categoria::insert([
            'nombre'  => 'Brochas y Rodillos',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);
    }
}
