<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('id_docente');

            $table->unsignedTinyInteger('id_genero')->nullable();

            $table->foreign('id_genero')
                ->references('id_genero')
                ->on('generos')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('nombre_docente', 60)->nullable();
            $table->string('apellido_docente', 60)->nullable();
            $table->string('correo_docente', 160)->nullable();
            $table->string('telefono_docente', 10)->nullable();
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
        Schema::dropIfExists('docentes');
    }
}
