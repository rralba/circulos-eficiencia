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
            $table->increments('id')->unique()->unsigned();
            $table->string('proyecto',150);
            $table->date('fecha_reg');
            $table->enum('nivel',['0','1','2'])->default('0');
            $table->string('depto',45);
            $table->text('asesor');
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->decimal('comite',2,0)->nullable();
            $table->text('valor')->nullable();
            $table->string('metodologia',15)->nullable();
            $table->decimal('ahorro_anual_proy',10,0)->nullable();
            $table->string('metrico_primario',150)->nulleable();
            $table->string('metrico_secundario',150)->nulleable();
            $table->string('empresa',10);
            $table->enum('desc_proy',['0','1'])->default('0');
            $table->enum('proy_status',['0','1','2','3','4'])->default('1');
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
        Schema::dropIfExists('proyects');
    }
}
