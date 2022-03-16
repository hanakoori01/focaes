<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadesProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidades_proyectos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('IdUniversidad')->unsigned();
            $table->foreign('IdUniversidad')->references('id')->on('universidades');

            $table->bigInteger('IdProyecto')->unsigned();
            $table->foreign('IdProyecto')->references('id')->on('proyectos');

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
        Schema::dropIfExists('universidades_proyectos');
    }
}
