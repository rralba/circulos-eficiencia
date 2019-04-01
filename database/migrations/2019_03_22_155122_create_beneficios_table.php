<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficios', function (Blueprint $table) {
            $table->integer('id')->increments()->unique()->unsigned();
            $table->integer('proyect_id')->unsigned();
            $table->integer('beneficio_id')->unique()->unsigned()->nullable();
            $table->date('fecha_gen');
            $table->decimal('beneficio');
            $table->enum('status',['1','0'])->default('0');
            $table->decimal('num_pago',2)->nullable();
            $table->date('mes_pago')->nullable();
            $table->timestamps();
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->foreign('beneficio_id')->references('id')->on('reconocimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficios');
    }
}
