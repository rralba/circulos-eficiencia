<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReconocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimientos', function (Blueprint $table) {
            $table->integer('id')->unique()->unsigned();
            $table->integer('proyect_id')->unsigned();
            $table->integer('beneficio_id')->unsigned()->unique();
            $table->decimal('beneficio_a')->nullable();
            $table->decimal('beneficio_b')->nullable();
            $table->decimal('beneficio_c')->nullable();
            $table->decimal('pago_total');
            $table->timestamps();
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->foreign('beneficio_id')->references('id')->on('beneficios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reconocimientos');
    }
}
