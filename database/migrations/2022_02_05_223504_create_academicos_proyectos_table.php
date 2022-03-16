<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos_proyectos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('IdAcademico')->unsigned();
            $table->foreign('IdAcademico')->references('id')->on('academicos');

            $table->bigInteger('IdProyecto')->unsigned();
            $table->foreign('IdProyecto')->references('id')->on('proyectos');

            $table->string('TipoAcademico', 100);

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
        Schema::dropIfExists('academicos_proyectos');
    }
}
