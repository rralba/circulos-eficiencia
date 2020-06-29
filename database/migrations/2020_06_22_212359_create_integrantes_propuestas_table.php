<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesPropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes_propuestas', function (Blueprint $table) {
            $table->increments('id')->unique()->unsigned();
            $table->integer('propuesta_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->decimal('rol',2,0)->nullable();
            $table->timestamps();
            $table->foreign('propuesta_id')->references('id')->on('propuestas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrantes_propuestas');
    }
}
