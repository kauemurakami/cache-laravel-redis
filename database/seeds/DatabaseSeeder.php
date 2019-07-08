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
        $this->call(ProdutosSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosCategoriasSeeder::class);
    }
}
