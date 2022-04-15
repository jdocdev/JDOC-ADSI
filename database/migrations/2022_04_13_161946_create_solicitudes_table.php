<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA SOLICITUDES
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_solicitud');
            $table->string('titulo_solicitud');
            $table->text('descripcion_solicitud');
            $table->foreignId('id_categoria_solicitud')->references('id')->on('categorias');
            $table->foreignId('id_producto_solicitud')->references('id')->on('productos');
            $table->foreignId('id_usuario_solicitud')->references('id')->on('users');
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
        Schema::dropIfExists('solicitudes');
    }
}
