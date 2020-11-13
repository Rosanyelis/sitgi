<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class clientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Cliente::insert([
            'tipodocumento'  	=> 'V-',
            'numdocumento'  	=> '14063125',
            'nombre' 			=> 'Yelitza Bellorin',
            'direccion'  		=> 'Barrio Altamira - Calle las Brisas',
            'telefono'  		=> '04148938731'
        ]);

        Cliente::insert([
            'tipodocumento'  	=> 'V-',
            'numdocumento'  	=> '27288069',
            'nombre' 			=> 'Wilmer Mendoza',
            'direccion'  		=> 'Barrio Altamira - Calle las Brisas',
            'telefono'  		=> '04269875029'
        ]);

        Cliente::insert([
            'tipodocumento'  	=> 'V-',
            'numdocumento'  	=> '13923479',
            'nombre' 			=> 'Wilmer Mendoza',
            'direccion'  		=> 'Barrio Altamira - Calle las Brisas',
            'telefono'  		=> '04143941406'
        ]);

        Cliente::insert([
            'tipodocumento'  	=> 'V-',
            'numdocumento'  	=> '26119392',
            'nombre' 			=> 'Rosanyelis Mendoza',
            'direccion'  		=> 'Barrio Altamira - Calle las Brisas',
            'telefono'  		=> '04148035253'
        ]);

        Cliente::insert([
            'tipodocumento'  	=> 'V-',
            'numdocumento'  	=> '26119492',
            'nombre' 			=> 'Maria Fabiola Giraldo',
            'direccion'  		=> 'Vía principal de Playa Grande',
            'telefono'  		=> '04242426889'
        ]);
    }
}
