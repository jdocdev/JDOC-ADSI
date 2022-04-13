<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //AQUI AGREGAMOS LOS CAMPOS DE LA TABLA CATEGORIA
    protected $file = ['nombre_categoria','descripcion_categoria'];
}
