<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_encuestas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_encuesta');
            $table->unsignedTinyInteger('id_asignatura');

            $table->foreign('id_encuesta')
                ->references('id_encuesta')
                ->on('encuestas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_asignatura')
                ->references('id_asignatura')
                ->on('asignaturas')
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
        Schema::dropIfExists('asignatura_encuestas');
    }
}
