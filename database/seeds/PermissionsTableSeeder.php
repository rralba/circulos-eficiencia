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
        //integrantes
        Permission::create([
            'name'          =>  'Crear integrantes',
            'slug'          =>  'integrants.create',
            'description'   =>  'Crear integrantes de un proyecto',
        ]);
        Permission::create([
            'name'          =>  'Editar integrantes',
            'slug'          =>  'integrants.edit',
            'description'   =>  'Editar integrantes de un proyecto',
        ]);
        Permission::create([
            'name'          =>  'Eliminar integrantes',
            'slug'          =>  'integrants.destroy',
            'description'   =>  'Eliminar integrantes de un proyecto',
        ]);
        //beneficio
        Permission::create([
            'name'          =>  'Navega beneficios',
            'slug'          =>  'beneficios.index',
            'description'   =>  'Navega beneficios del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver beneficios',
            'slug'          =>  'beneficios.show',
            'description'   =>  'Ver beneficios del sistema',
        ]);
        Permission::create([
            'name'          =>  'Crear beneficios',
            'slug'          =>  'beneficios.create',
            'description'   =>  'Crear beneficios del sistema',
        ]);
        Permission::create([
            'name'          =>  'Editar beneficios',
            'slug'          =>  'beneficios.edit',
            'description'   =>  'Editar beneficios del sistema',
        ]);
        Permission::create([
            'name'          =>  'eliminar beneficios',
            'slug'          =>  'beneficios.destroy',
            'description'   =>  'eliminar beneficios del sistema',
        ]);
        //cancelados
        Permission::create([
            'name'          =>  'Navega cancelados',
            'slug'          =>  'cancelados.index',
            'description'   =>  'Navega proyectos cancelados del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver cancelados',
            'slug'          =>  'cancelados.show',
            'description'   =>  'Ver proyectos cancelados del sistema',
        ]);
        Permission::create([
            'name'          =>  'Editar cancelados',
            'slug'          =>  'cancelados.edit',
            'description'   =>  'Editar proyectos cancelados del sistema',
        ]);
        //empleados
        Permission::create([
            'name'          =>  'Ver empleados',
            'slug'          =>  'empleados.show',
            'description'   =>  'Ver empleados del sistema',
        ]);
        Permission::create([
            'name'          =>  'Crear empleados',
            'slug'          =>  'empleados.create',
            'description'   =>  'Crear empleados del sistema',
        ]);
        //reconocimientos
        Permission::create([
            'name'          =>  'Navega reconocimientos',
            'slug'          =>  'reconocimientos.index',
            'description'   =>  'Navega reconocimientos del sistema',
        ]);
        Permission::create([
            'name'          =>  'Ver reconocimientos',
            'slug'          =>  'reconocimientos.show',
            'description'   =>  'Ver reconocimientos del sistema',
        ]);
        Permission::create([
            'name'          =>  'Crear reconocimientos',
            'slug'          =>  'reconocimientos.create',
            'description'   =>  'Crear reconocimientos del sistema',
        ]);
        Permission::create([
            'name'          =>  'Editar reconocimientos',
            'slug'          =>  'reconocimientos.edit',
            'description'   =>  'Editar reconocimientos del sistema',
        ]);
        Permission::create([
            'name'          =>  'eliminar reconocimientos',
            'slug'          =>  'reconocimientos.destroy',
            'description'   =>  'eliminar reconocimientos del sistema',
        ]);
        Permission::create([
            'name'          =>  'Navegar proceso',
            'slug'          =>  'procesos.index',
            'description'   =>  'Navega proyectos en inicio de proceso de pago',
        ]);
        Permission::create([
            'name'          =>  'Ejecutar proceso',
            'slug'          =>  'procesos.create',
            'description'   =>  'Ejecuta proceso de pago',
        ]);
        Permission::create([
            'name'          =>  'Acceso a Maestro',
            'slug'          =>  'maestro.index',
            'description'   =>  'Ejecuta proceso Maestro',
        ]);    
        
    }
}
