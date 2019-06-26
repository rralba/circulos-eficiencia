<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\integrant;
use App\empleado;
use App\beneficio;
use App\reconocimiento;
use Illuminate\Http\Request;
use DB;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyect = Proyect::all();
        return view('proyects.index', compact('proyect'));
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
    public function editar(Proyect $proyect, integrant $integrant)
    {
        return view('proyects.editinteg', compact('proyect', 'integrant'));
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
    public function save(Request $request, Proyect $proyect, integrant $integrant)
    {
        // $integrant->update($request->all());
        // return redirect()->back()->with('info', 'Integrante actualizado con exito');
        $integrante = integrant::where('id', '=', $request->pin)->first();
        $integrante->id = $request->input('pin');
        $integrante->proyect_id = $request->input('proy_id');
        $integrante->empleado_id = $request->input('edit_id');
        $integrante->rol = $request->input('country');
        $integrante->save();
        return redirect()->back();
        // dd($request->all());
        // $integrant->update($request->all());
        // ->where('proyect_id', '=', '$request->proyect_id');
        // $integrante->empleado_id = $request->input('edit_id');
        // $integrante->rol = $request->input('country'); 
        // $integrante->save();
        // return redirect()->back()->with('info', 'Integrante Actualizado');
        // dd($request->all());
    }

    public function benedit(Request $request, Proyect $proyect, beneficio $beneficio)
    {
        return view('proyects.beneficios', compact('request', 'beneficio', 'proyect'));
        // dd($beneficio->all());
    }

    public function benupdate(Request $request, beneficio $beneficio)
    {
        $beneficio->update($request->all());
        // $fechareg = $request->input('fecha_gen');
        // $benef = $request->input('beneficio');
        // $beneficio = beneficio::find($request->proyect_id);
        // $beneficio->fecha_gen = $fechareg;
        // $beneficio->beneficio = $benef;
        // $beneficio->save();
        return redirect()->back()->with('info', 'Beneficio Actualizado');
        // dd($request->all());
    }

    public function addbenef(Request $request)
    {
        // $beneficio = beneficio::create($request->all());
        // return view('proyects.beneficios', compact('request', 'beneficio'));
        $beneficio = new beneficio();
        $beneficio->proyect_id = $request->input('proyect_id');
        $beneficio->fecha_gen = $request->input('fecha_gen');
        $beneficio->beneficio = $request->input('beneficio');
        $beneficio->save();
        return redirect()->back();
        // dd($request->all());
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        $delete = integrant::where('id' ,$data['pinn'])->delete();
        return redirect()->back();
        // dd($request->all());
    }

    public function add(Request $request)
    {
        $integrante = new integrant();
        $integrante->proyect_id = $request->input('proyect_id');
        $integrante->empleado_id = $request->input('id');
        $integrante->rol = $request->input('rol');
        $integrante->save();
        return redirect()->back();
        // dd($request->all());
    }
    public function recoindex(Proyect $proyect, Request $request)
    {
        // $reconocimientos = reconocimiento::paginate();
        // return view('proyects.reconocimientos', compact('reconocimientos', 'proyect', 'request'));
        // $prueba = $request;
        // $num = $proyect->id;
        // $data = Proyect::where('proyects.id', '=', '$num')
        $data = db::table('proyects')
        ->join('beneficios', 'proyects.id', '=', 'beneficios.proyect_id')
        ->join('reconocimientos', 'beneficios.id', '=', 'reconocimientos.beneficio_id')
        ->select('reconocimientos.*', 'beneficios.id', 'proyects.id')
        ->get();
        return view('proyects.reconocimientos', compact('data', 'proyect', 'request'));
        // $data = DB::table('proyects')
        // ->join('beneficios', 'proyects.id', '=', 'beneficios.proyect_id')
        // ->join('reconocimientos', 'beneficios.id', '=', 'reconocimientos.beneficio_id')
        // ->get();
        // $reco = reconocimiento::where('proyect_id', '=', $request);
        // return view('proyects.reconocimientos', compact('proyect', 'beneficio'));
        // dd($reconocimientos);
        // var_dump($data); die();
        // dd($data);
    }
    public function beneindex(Proyect $proyect, Request $request, beneficio $beneficio)
    {
        $beneficios = beneficio::paginate();
        return view('proyects.beneficios', compact('beneficios', 'proyect', 'beneficio'));
        // dd($request->all());  
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
