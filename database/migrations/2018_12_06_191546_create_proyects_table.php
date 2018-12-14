<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proyecto',150);
            $table->date('fecha_reg');
            $table->decimal('nivel',1,0);
            $table->string('depto',45);
            $table->text('asesor');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->decimal('comite',1,0);
            $table->text('valor');
            $table->string('metodologia',15);
            $table->decimal('ahorro_anual_proy',10,0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyects');
    }
}
