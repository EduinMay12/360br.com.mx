<?php

namespace Database\Seeders;
  
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
        $permissions = [

            'Crear Lotes',
            'Editar Lotes',
            'Eliminar Lotes',

            'Crear Blog',
            'Editar Blog',
            'Eliminar Blog',

           'Administrador',
           'Crear Rol',
           'Editar Rol',
           'Eliminar Rol'
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
