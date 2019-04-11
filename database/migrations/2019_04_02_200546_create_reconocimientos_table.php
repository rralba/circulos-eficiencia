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
            $table->integer('beneficio_id')->unsigned();
            $table->integer('empleado');
            $table->decimal('pago',9,0);
            $table->date('mes_pago');
            $table->decimal('atrib1')->nullable();
            $table->decimal('atrib2')->nullable();
            $table->string('atrib3')->nullable();
            $table->string('atrib4')->nullable();
            $table->timestamps();
            $table->foreign('beneficio_id')->references('idbeneficio')->on('proyects');
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
