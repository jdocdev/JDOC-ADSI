<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA CATEGORIA
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_categoria');
            $table->string('descripcion_categoria');
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
        Schema::dropIfExists('categoria');
    }
}
