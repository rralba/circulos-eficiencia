<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanceladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cancelados_id')->unsigned();
            $table->string('proyecto',150);
            $table->date('fecha_reg');
            $table->enum('nivel',['0','1','2'])->default('0')->nullable();
            $table->string('depto',45);
            $table->text('asesor');
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->decimal('comite',2,0)->nullable();
            $table->text('valor')->nullable();
            $table->string('metodologia',15)->nullable();
            $table->decimal('ahorro_anual_proy',10,0)->nullable();
            $table->foreign('cancelados_id')->references('id')->on('proyects');
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
        Schema::dropIfExists('cancelados');
    }
}
