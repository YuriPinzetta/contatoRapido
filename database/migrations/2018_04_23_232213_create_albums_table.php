<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo_venda');
            $table->string('tipo_imovel');
            $table->integer('quartos');
            $table->integer('metro_quadrado');
            $table->integer('vagas_garagem');
            $table->integer('condominio');
            $table->integer('iptu');
            $table->integer('preco');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
