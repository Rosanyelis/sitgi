<?php

use Illuminate\Database\Seeder;
use App\Marca;

class marcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::insert([
            'nombre'  => 'Ferrer',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Marca::insert([
            'nombre'  => 'Hitman',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Marca::insert([
            'nombre'  => 'Romeral',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Marca::insert([
            'nombre'  => 'HP',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Marca::insert([
            'nombre'  => 'Casio',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Marca::insert([
            'nombre'  => 'Mistyc',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);
    }
}
