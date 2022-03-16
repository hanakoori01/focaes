<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('CodigoSia', 255);
            $table->string('Titulo', 2500);
            $table->string('AnnoInicio', 4);
            $table->string('Vigencia', 15);
            $table->string('AreaInfluencia', 2500);
            $table->integer('CantEstVinculadosSede');
            $table->integer('CantEstVinculadosOtros');
            $table->string('TipoProyecto', 255);
            $table->string('Estado', 100);
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
        Schema::dropIfExists('proyectos');
    }
}
