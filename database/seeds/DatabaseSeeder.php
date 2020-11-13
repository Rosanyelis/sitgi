<?php

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
            $this->call([
                clientesTableSeeder::class,
                empresasTableSeeder::class,
                marcasTableSeeder::class,
                proveedorsTableSeeder::class,
                categoriasTableSeeder::class,
                productosTableSeeder::class,
                usuariosTableSeeder::class
            ]);
        // $this->call(UsersTableSeeder::class);

    }
}
