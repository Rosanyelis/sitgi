<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class empresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::insert([
            'razon_social'	=> 'Distribuidora Moya López. C.A',
            'rif'  			=> 'J-26119392-9',
            'direccion'		=> 'Calle Acosta, frente al Mercado',
            'telefono'		=> '0414-8035352',
            'iva'  			=> '16',
            'tipo_moneda'	=> 'Bs.S',
        ]);
    }
}
