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
            $table->integer('id')->increments()->unique();
            $table->integer('beneficio_id')->unsigned();
            $table->integer('empleado')->unsigned();
            $table->decimal('pago',9,0);
            $table->decimal('descuento',9,0)->default('0');
            $table->string('concepto_desc',100)->nullable();
            $table->timestamps();
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
