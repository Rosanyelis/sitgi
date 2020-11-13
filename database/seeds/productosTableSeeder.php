<?php

use Illuminate\Database\Seeder;
use App\Producto;

class productosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::insert([
        	'codigo'  => '0102456',
            'nombre'  => 'Esmeril',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'stock'  => '0',
            'id_categoria'  => '2',
            'id_marca'  => '1',
        ]);

        Producto::insert([
            'codigo'  => '0356489725',
            'nombre'  => 'Zegueta',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'stock'  => '0',
            'id_categoria'  => '1',
            'id_marca'  => '3',
        ]);

        Producto::insert([
            'codigo'  => '3654978702',
            'nombre'  => 'Pala',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'stock'  => '0',
            'id_categoria'  => '4',
            'id_marca'  => '2',
        ]);

        Producto::insert([
            'codigo'  => '3564879365',
            'nombre'  => 'Clavos',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'stock'  => '0',
            'id_categoria'  => '2',
            'id_marca'  => '1',
        ]);

        Producto::insert([
            'codigo'  => '2364548795',
            'nombre'  => 'Alambre',
            'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'stock'  => '0',
            'id_categoria'  => '2',
            'id_marca'  => '1',
        ]);
    }
}
