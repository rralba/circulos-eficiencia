<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Integrants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrants', function (Blueprint $table) {
        $table->integer('id')->incements()->unique()->unsigned();
        $table->integer('proyect_id')->unsigned();
        $table->integer('empleado_id')->unsigned();
        $table->decimal('rol',1,0);
        $table->enum('pago',['0','1'])->default('1');
        $table->timestamps();
        $table->foreign('proyect_id')->references('id')->on('proyects')->onDelete('cascade')->onUpdate('cascade');
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
