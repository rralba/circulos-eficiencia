<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRowsPropuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propuestas', function (Blueprint $table){
            $table->string('asesor', 50)->nullable()->after('clave');
            $table->date('asignacion')->nullable()->after('final');
            $table->string('comentarios', 300)->nullable()->after('beneficio_eco');
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propuestas', function (Blueprint $table){
            $table->dropcolumn('asesor');
            $table->dropcolumn('asignacion');
            $table->dropcolumn('comentarios');
        });     
    }
}
