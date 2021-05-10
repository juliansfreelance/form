<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->id('id_texto');
            $table->string('nombre_texto', 120)->nullable();

            $table->unsignedTinyInteger('id_editorial')->nullable();

            $table->foreign('id_editorial')
                ->references('id_editorial')
                ->on('editoriales')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->year('year_edicion');
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
        Schema::dropIfExists('textos');
    }
}
