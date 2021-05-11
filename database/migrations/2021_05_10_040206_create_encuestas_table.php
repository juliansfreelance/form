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
            $table->unsignedTinyInteger('id_localidad')->nullable();
            $table->unsignedBigInteger('id_institucion')->nullable();
            $table->unsignedBigInteger('id_docente')->nullable();
            $table->unsignedTinyInteger('id_tipo_encuesta')->nullable();

            $table->foreign('id_localidad')
                ->references('id_localidad')
                ->on('localidades')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('id_institucion')
                ->references('id_institucion')
                ->on('instituciones')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('id_docente')
                ->references('id_docente')
                ->on('docentes')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('id_tipo_encuesta')
                ->references('id_tipo_encuesta')
                ->on('tipo_encuestas')
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
