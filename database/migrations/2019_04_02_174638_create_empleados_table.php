<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('id')->unique()->unsigned();
            $table->string('nombre',150);
            $table->string('posicion',45);
            $table->string('depto',45);
            $table->decimal('cia',4,0);
            $table->string('direccion',45);
            $table->decimal('nivel',2,0);
            $table->decimal('atrib1')->nullable();
            $table->decimal('atrib2')->nullable();
            $table->string('atrib3')->nullable();
            $table->string('atrib4')->nullable();
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
        Schema::dropIfExists('empleados');
    }
}
