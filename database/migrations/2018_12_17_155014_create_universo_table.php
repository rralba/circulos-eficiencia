<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ficha')->unique();
            $table->string('nombre',150);
            $table->string('posicion',45);
            $table->string('depto',45);
            $table->decimal('cia',4,0);
            $table->string('direccion',45);
            $table->decimal('nivel',2,0);
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
        Schema::dropIfExists('universo');
    }
}
