<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA SOLICITUD
    protected $fillable = ['fecha_solicitud','titulo_solicitud','descripcion_solicitud','id_categoria_solicitud','id_producto_solicitud','cedula_usuario_solicitud'];
    protected $table = 'solicitudes';
}
