<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeidnIntegrants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('integrants', function (Blueprint $table){
            $table->integer('mejora_id')->unsigned()->after('empleado_id')->nullable();
            $table->foreign('mejora_id')->references('id')->on('mejoras')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('integrants', function (Blueprint $table){
            $table->dropcolumn('mejora_id');
            $table->dropforeign(['mejora_id']);
        });
    }
}
