<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class proveedorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::insert([
            'nombre'        => 'Wilmer Mendoza',
            'razon_social'  => 'Distribuciones Ferrer',
            'rif'           => 'J-139234751',
            'direccion'     => 'Barrio Altamira - Calle las Brisas',
            'correo'        => 'wilmermendoza@gmail.com',
            'telefono'      => '04143941406'
        ]);

        Proveedor::insert([
            'nombre'        => 'Wladimir Mendez',
            'razon_social'  => 'Distribuidora Carabobeña',
            'rif'           => 'J-122343392',
            'direccion'     => 'Calle Juncal cruce con Calle Monagas',
            'correo'        => 'wladimirmendez@gmail.com',
            'telefono'      => '04248832412'
        ]);

        Proveedor::insert([
            'nombre'        => 'Marco Manuel Rodríguez',
            'razon_social'  => 'Distribuidora Materiales Cain. C.A',
            'rif'           => 'J-256489724',
            'direccion'     => 'Caracas - calle Guarenas',
            'correo'        => 'marcomanuel132@gmail.com',
            'telefono'      => '04142154654'
        ]);

        Proveedor::insert([
            'nombre'        => 'Carlos Figueroa',
            'razon_social'  => 'Inversiones Solera',
            'rif'           => 'J-131123782',
            'direccion'     => 'Punta de Mata - Estado Monagas',
            'correo'        => 'carlos1232figueroa@gmail.com',
            'telefono'      => '04125021468'
        ]);
    }
}
