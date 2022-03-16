<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios_proyectos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('IdSocio')->unsigned();
            $table->foreign('IdSocio')->references('id')->on('socios');

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
        Schema::dropIfExists('socios_proyectos');
    }
}
