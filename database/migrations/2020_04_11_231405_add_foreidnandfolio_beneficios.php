<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeidnandfolioBeneficios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beneficios', function (Blueprint $table){
            $table->integer('mejora_id')->unsigned()->after('proyect_id')->nullable();
            $table->string('folio',10)->after('mes_pago');
            $table->foreign('mejora_id')->references('id')->on('mejoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beneficios', function (Blueprint $table){
            $table->dropcolumn('mejora_id');
            $table->dropcolumn('folio');
            $table->dropforeign(['mejora_id']);
        });
    }
}
