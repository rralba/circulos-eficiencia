<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\integrant;
use App\empleado;
use Illuminate\Http\Request;
use DB;

class IntegrantController extends Controller
{
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('integrants.create');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(integrant $integrant)
    {
        return view('integrants.edit', compact('integrant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, integrant $integrant)
    {
        $integrant->update($request->all());
        return redirect()->route('proyects.show', $proyect->id)
        ->with('info', 'Proyecto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        $empleado->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
