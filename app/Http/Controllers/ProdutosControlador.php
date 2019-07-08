<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Cache;

class ProdutosControlador extends Controller
{
    //
    public function index(){
    	//tempo de validade na cache (em minutos)
    	$expiracao = 1;
    	//remember @1 nome da chave @2 tempo de expiracao em min, @3 func que será executada caso nao encontre a chave
    	$produtos = Cache::remember('todosprodutos', $expiracao, function(){
    		info('passei aqui');
    		return Produto::with('categorias')->get();
    	});

    	return view('produtos',compact(['produtos']));
    }
}
