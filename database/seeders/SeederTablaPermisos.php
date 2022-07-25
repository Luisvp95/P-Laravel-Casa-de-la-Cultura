<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
       $permisos = [

        'ver-usuario',
        'crear-usuario',
        'editar-usuario',
        'borrar-usuario',
        'detalle-usuario',

        'ver-rol',
        'crear-rol',
        'editar-rol',
        'borrar-rol',
        'detalle-rol',
        
        'ver-categoria',
        'crear-categoria',
        'editar-categoria',
        'borrar-categoria',
        'detalle-categoria',

        'ver-libro',
        'crear-libro',
        'editar-libro',
        'borrar-libro',
        'detalle-libro',

        'ver-persona',
        'crear-persona',
        'editar-persona',
        'borrar-persona',
        'detalle-persona',

        'ver-prestamo',
        'crear-prestamo',
        'editar-prestamo',
        'borrar-prestamo',
        'detalle-prestamo',

        'ver-curso',
        'crear-curso',
        'editar-curso',
        'borrar-curso',
        'detalle-curso',

        'ver-contenido',
        'crear-contenido',
        'editar-contenido',
        'borrar-contenido',
        'detalle-contenido',
        
        'ver-horario',
        'crear-horario',
        'editar-horario',
        'borrar-horario',
        'detalle-horario',

        'ver-evento',
        'crear-evento',
        'editar-evento',
        'borrar-evento',
        'detalle-evento',

        'ver-venta',
        'crear-venta',
        'editar-venta',
        'borrar-venta',
        'detalle-venta',



       ];
       foreach($permisos as $permiso){
        Permission::create(['name'=>$permiso]);
       }
    }
}
