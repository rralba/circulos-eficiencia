<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name'          =>  'Navegar Usuarios',
            'slug'          =>  'users.index',
            'description'   =>  'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver detalle de usuario',
            'slug'          =>  'users.show',
            'description'   =>  'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'          =>  'Edicion de Usuarios',
            'slug'          =>  'users.edit',
            'description'   =>  'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          =>  'Eliminar Usuario',
            'slug'          =>  'users.destroy',
            'description'   =>  'Eliminar cualquier usuario del sistema',
        ]);
        //roles
        Permission::create([
            'name'          =>  'Navegar roles',
            'slug'          =>  'roles.index',
            'description'   =>  'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver detalle de rol',
            'slug'          =>  'roles.show',
            'description'   =>  'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'          =>  'Creacion de roles',
            'slug'          =>  'roles.create',
            'description'   =>  'crear cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          =>  'Edicion de roles',
            'slug'          =>  'roles.edit',
            'description'   =>  'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          =>  'Eliminar rol',
            'slug'          =>  'roles.destroy',
            'description'   =>  'Eliminar cualquier rol del sistema',
        ]);
        //proyectos
        Permission::create([
            'name'          =>  'Navegar proyectos',
            'slug'          =>  'proyects.index',
            'description'   =>  'Lista y navega todos los proyectos del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver detalle de proyecto',
            'slug'          =>  'proyects.show',
            'description'   =>  'Ver en detalle cada proyecto del sistema',
        ]);
        Permission::create([
            'name'          =>  'Creacion de proyectos',
            'slug'          =>  'proyects.create',
            'description'   =>  'crear cualquier dato de un proyecto del sistema',
        ]);
        Permission::create([
            'name'          =>  'Edicion de proyectos',
            'slug'          =>  'proyects.edit',
            'description'   =>  'Editar cualquier dato de un proyecto del sistema',
        ]);
        Permission::create([
            'name'          =>  'Eliminar proyecto',
            'slug'          =>  'proyects.destroy',
            'description'   =>  'Eliminar cualquier proyecto del sistema',
        ]);
    }
}
