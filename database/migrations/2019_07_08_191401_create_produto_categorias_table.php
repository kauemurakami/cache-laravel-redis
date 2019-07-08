<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_categorias', function (Blueprint $table) {

            $table->unsignedBigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->unsignedBigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->primary(['produto_id','categoria_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_categorias');
    }
}
