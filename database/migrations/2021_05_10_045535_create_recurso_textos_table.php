<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_textos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_encuesta_recurso');
            $table->unsignedBigInteger('id_texto');

            $table->foreign('id_encuesta_recurso')
                ->references('id_encuesta_recurso')
                ->on('encuesta_recursos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_texto')
                ->references('id_texto')
                ->on('textos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_textos');
    }
}
