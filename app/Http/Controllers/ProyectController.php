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
        $proyects = DB::table('proyects')->get();
        return view('proyects.index', ['proyects' => $proyects]);
        // dd($proyect->all());
    }
 /**
     * Display a listing of the resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function master()
    {
        $proye = DB::table('proyects')->get();
        // return view('proyects.master', ['proye' => $proye]);
        dd($proye->all());
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
        return redirect()->back()
        ->with('info', 'Proyecto guardado con exito');
        // dd($request->all());
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
    }

    public function benedit(Request $request)
    {
        $beneficio = beneficio::where('id', '=', $request->idbenef)->first();
        $beneficio->status = $request->input('statusbenef');
        $beneficio->save();
        return redirect()->back()->with('info', 'Status Actualizado');
        // dd($request->all());
    }

    public function benupdate(Request $request, beneficio $beneficio)
    {
        $beneficio = beneficio::where('id', '=', $request->id)->first();
        $beneficio->fecha_gen = $request->input('fechagen');
        $beneficio->beneficio = $request->input('benef');
        $beneficio->save();
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
        // dd($beneficio->all());
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
        $int_total = integrant::where('proyect_id','=',$request->proyect_id)
            ->count();
        $autor = DB::table('integrants')
            ->where('proyect_id','=',$request->proyect_id)
            ->where('rol','=', 1)
            ->count();
        $imp_a = DB::table('integrants')
            ->where('proyect_id','=',$request->proyect_id)
            ->where('rol','=', '2')
            ->count();
        $idsap = DB::table('integrants')
            ->where('proyect_id','=',$request->proyect_id)
            ->where('empleado_id','=',$request->id)
            ->count();    
        $existe = DB::table('empleados')
            ->where('id','=',$request->id)
            ->count();
        if (($existe) == 0){
            return redirect()->back()->with('info', 'No existe empleado');
            }   
            else{
        if (($idsap) == 1){
            return redirect()->back()->with('info', 'Integrante duplicado');
            }   
            else{ 
        if (($int_total) >= 10) {
            return redirect()->back()->with('info', 'Numero maximo de integrantes alcanzado');
        } 
        if (($request->rol) == 1){
            if (($autor) > 0){
                return redirect()->back()->with('info', 'Proyeto ya cuenta con autor');
            }
            else {
                $integrante = new integrant();
                $integrante->proyect_id = $request->input('proyect_id');
                $integrante->empleado_id = $request->input('id');
                $integrante->rol = $request->input('rol');
                $integrante->save();
            return redirect()->back();
            }
            }
            else{
            if (($request->rol) == 2){
                if (($imp_a) >= 2){
                    return redirect()->back()->with('info', 'Numero maximo de Implementadores A alcanzado');
                }
                else {
                $integrante = new integrant();
                $integrante->proyect_id = $request->input('proyect_id');
                $integrante->empleado_id = $request->input('id');
                $integrante->rol = $request->input('rol');
                $integrante->save();
                return redirect()->back();
                }
        }
            else{
                if (($request->rol) == 3){
                    $integrante = new integrant();
                    $integrante->proyect_id = $request->input('proyect_id');
                    $integrante->empleado_id = $request->input('id');
                    $integrante->rol = $request->input('rol');
                    $integrante->save();
                    return redirect()->back();  
                }
            }
        }
    }
    }
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
    public function beneindex(Request $request, Proyect $proyect, beneficio $beneficio)
    {
        $data = db::table('proyects')
        ->join('beneficios', 'proyects.id', '=', 'beneficios.proyect_id')
        ->select('beneficios.*')
        ->where('status', '<>', '2')
        ->get();
        return view('proyects.beneficios', compact('data', 'proyect', 'beneficio'));
        // dd($data->all());  
    }   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function benefdestroy(Request $request)
    {
        $data = $request->all();
        $delete = beneficio::where('id' ,$data['pinn'])->delete();
        return redirect()->back();
        // dd($request->all());
    }
    
}
