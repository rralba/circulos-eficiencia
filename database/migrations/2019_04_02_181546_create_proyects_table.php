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
            $table->integer('p1')->unsigned()->nullable();
            $table->integer('p2')->unsigned()->nullable();
            $table->integer('p3')->unsigned()->nullable();
            $table->integer('p4')->unsigned()->nullable();
            $table->integer('p5')->unsigned()->nullable();
            $table->integer('p6')->unsigned()->nullable();
            $table->integer('p7')->unsigned()->nullable();
            $table->integer('p8')->unsigned()->nullable();
            $table->integer('p9')->unsigned()->nullable();
            $table->integer('p10')->unsigned()->nullable();
            $table->enum('rp1',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp2',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp3',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp4',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp5',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp6',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp7',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp8',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp9',['0','1','2','3'])->default('0')->nullable();
            $table->enum('rp10',['0','1','2','3'])->default('0')->nullable();
            $table->enum('nivel',['0','1','2'])->default('0')->nullable();
            $table->decimal('beneficio',9,0)->nullable();
            $table->enum('status_pago',['1','0'])->default('0');
            $table->date('fecha_gen')->nullable();
            $table->enum('status_proy',['0','1'])->default('1');
            $table->integer('atrib1')->nullable();
            $table->string('atrib2',15)->nullable();
            $table->decimal('atrib3',10,0)->nullable();
            $table->integer('atrib4')->nullable();
            $table->string('atrib5',15)->nullable();
            $table->decimal('atrib6',10,0)->nullable();
            $table->timestamps();
            $table->foreign('proydato_id')->references('id')->on('proydatos');
            $table->foreign('p1')->references('id')->on('empleados');
            $table->foreign('p2')->references('id')->on('empleados');
            $table->foreign('p3')->references('id')->on('empleados');
            $table->foreign('p4')->references('id')->on('empleados');
            $table->foreign('p5')->references('id')->on('empleados');
            $table->foreign('p6')->references('id')->on('empleados');
            $table->foreign('p7')->references('id')->on('empleados');
            $table->foreign('p8')->references('id')->on('empleados');
            $table->foreign('p9')->references('id')->on('empleados');
            $table->foreign('p10')->references('id')->on('empleados');
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
