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
        $table->increments('id');
        $table->integer('integrants_id')->unsigned();
        $table->integer('integrants_ficha');
        $table->integer('ficha'); 
        $table->decimal('rol',1,0);
        $table->timestamps();
        $table->foreign('integrants_id')->references('id')->on('proyects')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('integrants_ficha')->references('ficha')->on('universo');
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
