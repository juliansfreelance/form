<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id('id_institucion');

            $table->unsignedTinyInteger('id_localidad')->nullable();
            $table->unsignedTinyInteger('id_tipo_institucion')->nullable();

            $table->foreign('id_localidad')
                ->references('id_localidad')->on('localidades')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('id_tipo_institucion')
                ->references('id_tipo_institucion')->on('tipo_instituciones')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('nombre_institucion', 255);
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
        Schema::dropIfExists('instituciones');
    }
}
