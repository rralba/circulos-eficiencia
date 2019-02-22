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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $integrant = integrant::create($request->all());
        return redirect()->route('integrants.edit', $integrant->proyect_id)
        ->with('info', 'integrantes guardados con exito');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect, integrant $integrant)
    {
        return view('integrants.edit', compact('proyect', 'integrant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $proyect->update($request->all());
        return redirect()->route('proyects.show', $proyect->id)
        ->with('info', 'Proyecto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(integrant $integrant)
    {
        $integrant->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
