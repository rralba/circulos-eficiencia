<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Roles = Role::paginate();
        return view('roles.index', compact('Roles'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = permission::get();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Role = Role::create($request->all());

        //actualizar permisos
        $Role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $Role->id)
        ->with('info', 'rol guardado con exito');
    }


       /**
     * Display the specified resource.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $Role)
    {
        return view('roles.show', compact('Role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $Role)
    {
        $permissions = permission::get();
        return view('roles.edit', compact('Role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $Role)
    {
        //actualizar role
        $Role->update($request->all());

        //actualizar roles
        $Role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $Role->id)
        ->with('info', 'role actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $Role)
    {
        $Role->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}

