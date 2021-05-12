<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id('id_encuesta');

            $table->unsignedBigInteger('id_docente')->nullable();
            $table->unsignedBigInteger('id_institucion')->nullable();
            $table->unsignedTinyInteger('id_asignatura')->nullable();

            $table->foreign('id_docente')
                ->references('id_docente')
                ->on('docentes')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('id_institucion')
                ->references('id_institucion')
                ->on('instituciones')
                ->onDelete('set null')
                ->onUpdate('cascade');


            $table->foreign('id_asignatura')
                ->references('id_asignatura')
                ->on('asignaturas')
                ->onDelete('set null')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('encuestas');
    }
}
