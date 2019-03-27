<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\integrant;
use App\empleado;
use Illuminate\Http\Request;
use DB;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyects = proyect::paginate();
        return view('proyects.index', compact('proyects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyect = Proyect::create($request->all());
        return redirect()->route('proyects.edit', $proyect->id)
        ->with('info', 'Proyecto guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {   
       return view('proyects.show', compact('proyect'));
    }
    
      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect)
    {
        return view('proyects.edit', compact('proyect'));
    }
    public function editar(Proyect $proyect)
    {
        return view('proyects.editinteg', compact('proyect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {   
        $proyect->update($request->all());
        return redirect()->route('proyects.edit', $proyect->id)
        ->with('info', 'Proyecto actualizado con exito');
    }
    public function save(Request $request, Proyect $proyect)
    {
        $integrante = integrant::where('proyect_id', '=', $request->proyect_id)->first();
        $integrante->empleado_id = $request->input('edit_id');
        $integrante->rol = $request->input('country');
        $integrante->save();
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        $delete = integrant::where('id' ,$data['pin'])->delete();
        return redirect()->back();
    }

    public function add(Request $request)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
        $proyect->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
    
}
