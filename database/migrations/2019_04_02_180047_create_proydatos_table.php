<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProydatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proydatos', function (Blueprint $table) {
            $table->integer('id')->unique()->increments()->unsigned();
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
            $table->decimal('ahorro_anual_proy',9,0)->nullable();
            $table->enum('status_proy',['0','1'])->default('1');
            $table->integer('atrib1')->nullable();
            $table->string('atrib2',15)->nullable();
            $table->decimal('atrib3',10,0)->nullable();
            $table->integer('atrib4')->nullable();
            $table->string('atrib5',15)->nullable();
            $table->decimal('atrib6',10,0)->nullable();
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
        Schema::dropIfExists('proydatos');
    }
}
