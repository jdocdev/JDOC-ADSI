<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA PRODUCTOS
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto',100);
            $table->text('descripcion_producto');
            $table->text('multimedia_producto');
            $table->foreignId('id_categoria_producto')->references('id')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
}
