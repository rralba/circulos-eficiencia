<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proydato_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->enum('rol', ['0','1','2','3'])->default('0')->nullable();
            $table->timestamps();
            $table->foreign('proydato_id')->references('id')->on('proydatos');
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrants');
    }
}
