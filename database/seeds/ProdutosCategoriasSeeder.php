<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Categoria;
use App\Produto;
use App\ProdutoCategoria;

class ProdutosCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create();

    	$produtos = Produto::all();
    	$categorias = Categoria::all()->pluck('id')->toArray(); // retorna um array com os ids de todas as categorias cadastradas

    	foreach($produtos as $p){
    		$elementos = rand(2,6);
    		for($i=0; $i<$elementos; $i++){ 
    			do{
	    			$cat_id = $faker->randomElement($categorias);
    			}
    			while (
    				ProdutoCategoria::where('produto_id', $p->id)->where('categoria_id', $cat_id)->exists()
    			);
    			
    			ProdutoCategoria::create([
    				'produto_id' => $p->id, 'categoria_id' => $cat_id
    			]);
    		}

    	}



    }
}
