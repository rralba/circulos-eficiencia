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
            $table->integer('id')->unique()->unsigned()->increments();
            $table->integer('proyect_id')->unique()->unsigned();
            $table->date('fecha_gen');
            $table->decimal('n_pago',2)->nullable();
            $table->decimal('ahorro');
            $table->enum('status',['1','0'])->default('0');
            $table->date('mes_pago')->nullable();
            $table->timestamps();
            $table->foreign('proyect_id')->references('id')->on('proyects');
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
