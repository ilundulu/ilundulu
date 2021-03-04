<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesenvolvimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desenvolvimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_equipa');
            $table->unsignedBigInteger('id_projecto');
            $table->string('estado');
            $table->string('pasta');
            $table->timestamp('modificacoes');
            $table->foreign('id_projecto')->references('id')->on('projectos'); 
            $table->foreign('id_equipa')->references('id')->on('equipas');             
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
        Schema::dropIfExists('desenvolvimentos');
    }
}
