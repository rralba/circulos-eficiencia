 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id')->unique()->unsigned();
            $table->decimal('identificador',2,0);
            $table->date('registro');
            $table->string('direccion',250);
            $table->string('subdireccion',250);
            $table->string('departamento',250);
            $table->date('inicio');
            $table->date('final');
            $table->string('contacto',100);
            $table->decimal('clave',10,0);
            $table->decimal('extension',5,0);
            $table->integer('id_autoriza')->unsigned();
            $table->string('mejorar',250)->nullable();
            $table->string('objetivo',250)->nullable();
            $table->string('solucion',250)->nullable();
            $table->string('proyecto',250)->nullable();
            $table->string('creativo',500)->nullable();
            $table->string('areas_part',250)->nullable();
            $table->string('skills_integ',250)->nullable();
            $table->string('principales_act',250)->nullable();
            $table->string('conocimiento_critico',250)->nullable();
            $table->string('sindicalizados',250)->nullable();
            $table->decimal('beneficio_eco',10,0)->nullable();
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
        Schema::dropIfExists('propuestas');
    }
}
