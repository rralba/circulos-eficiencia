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
            $table->integer('proydato_id')->unsigned();
            $table->integer('idbeneficio')->unsigned()->increments()->unique();
            $table->decimal('beneficio',9,0)->nullable();
            $table->enum('status_pago',['1','0'])->default('0');
            $table->date('fecha_gen')->nullable();
            $table->decimal('num_pago',2)->default('0');
            $table->integer('atrib1')->nullable();
            $table->string('atrib2',15)->nullable();
            $table->decimal('atrib3',10,0)->nullable();
            $table->integer('atrib4')->nullable();
            $table->string('atrib5',15)->nullable();
            $table->decimal('atrib6',10,0)->nullable();
            $table->timestamps();
            $table->foreign('proydato_id')->references('id')->on('proydatos');
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
