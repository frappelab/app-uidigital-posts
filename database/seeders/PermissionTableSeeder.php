<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla post
            'ver-post',
            'crear-post',
            'editar-post',
            'borrar-post',

            //Operacions sobre tabla user
            'ver-user',
            'crear-user',
            'editar-user',
            'borrar-user',

             //Operacions sobre tabla user
             'ver-category',
             'crear-category',
             'editar-category',
             'borrar-category'
            
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}