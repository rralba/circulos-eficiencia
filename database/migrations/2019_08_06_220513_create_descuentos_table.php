<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('beneficio_id')->unsigned();
            $table->integer('sap_id')->unsigned();
            $table->decimal('descuento',9,0)->default('0');
            $table->string('concepto', 100)->nullable();
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
        Schema::dropIfExists('descuentos');
    }
}
