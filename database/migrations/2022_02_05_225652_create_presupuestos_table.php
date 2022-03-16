<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();
            $table->double('ARES');
            $table->double('OVDE');
            $table->double('InstanciaNacional');
            $table->double('InstanciaInternacional');
            $table->double('PresupuestoTotal');

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
        Schema::dropIfExists('presupuestos');
    }
}
