<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA SOLICITUD
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_solicitud');
            $table->string('titulo_solicitud');
            $table->string('descripcion_solicitud');
            $table->integer('id_categoria_solicitud');
            $table->integer('id_producto_solicitud');
            $table->string('cedula_usuario_solicitud');
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
        Schema::dropIfExists('solicitud');
    }
}
