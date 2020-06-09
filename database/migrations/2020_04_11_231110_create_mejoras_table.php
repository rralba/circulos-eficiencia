<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMejorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mejoras', function (Blueprint $table) {
            $table->increments('id')->unique()->unsigned();
            $table->date('registro');
            $table->string('direccion',150);
            $table->string('subdireccion',150);
            $table->string('departamento',150);
            $table->string('seccion',150);
            $table->text('valor');
            $table->text('desperdicio');
            $table->date('inicio');
            $table->date('final');
            $table->text('asesor');
            $table->text('entrego');
            $table->string('gpago',4);
            $table->enum('status',['0','1','2','3','4']);
            $table->date('mes_terminacion');
            $table->integer('reprogramada');
            $table->string('amejorar',250);
            $table->string('objetivo',250);
            $table->string('solucion',250);
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
        Schema::dropIfExists('mejoras');
    }
}
