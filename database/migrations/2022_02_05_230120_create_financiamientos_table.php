<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamientos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreFinanciamiento', 2500);
            $table->string('TipoFinanciamiento', 150);
            $table->string('Institucion', 300);
            $table->double('Cantidad');

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
        Schema::dropIfExists('financiamientos');
    }
}
