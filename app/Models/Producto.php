<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA PRODUCTO
    protected $file = ['nombre_producto','descripcion_producto','multimedia_producto','id_categoria_producto'];
}
