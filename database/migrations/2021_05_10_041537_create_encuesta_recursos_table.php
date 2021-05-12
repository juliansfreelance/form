<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_recursos', function (Blueprint $table) {
            $table->id('id_encuesta_recurso');

            $table->unsignedBigInteger('id_encuesta');
            $table->unsignedTinyInteger('id_tipo_recurso');

            $table->foreign('id_encuesta')
                ->references('id_encuesta')
                ->on('encuestas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_tipo_recurso')
                ->references('id_tipo_recurso')
                ->on('tipo_recursos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->year('year');
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
        Schema::dropIfExists('encuesta_recursos');
    }
}
