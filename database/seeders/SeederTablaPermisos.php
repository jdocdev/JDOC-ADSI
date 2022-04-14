<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie Permission
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Spatie Permission
        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla categoria
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',
            //tabla productos
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            //tabla solicitudes
            'ver-solicitud',
            'crear-solicitud',
            'editar-solicitud',
            'borrar-solicitud',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
