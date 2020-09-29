<?php

namespace App\Http\Controllers;

use App\integrant;
use App\empleado;
use App\beneficio;
use App\reconocimiento;
use App\mejora;
use App\propuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use DB;

class MejorasrapidasController extends Controller
{
    public function index()
    {
        $mejoras = DB::table('mejoras')
        ->where('status', '=', '1')->paginate(10);
        return view('mejorasrapidas.index', compact('mejoras'));
       	//dd($mejoras->all());
    }

    public function store(Request $request)
    {
        //$mr = mejora::create($request->all());
        //return redirect()->back()
        //->with('info', 'Mejora Rapida guardado con exito');
        dd($request->all());
    }

    public function create()
    {
        return view('mejorasrapidas.create');
    }

    public function accept(Request $request)
    {
        if (($request->aprobada) == 0)
        {
            if (($request->identificador) == 4)
                {
                $mejora = new mejora();
                $mejora->registro = $request->input('registro');
                $mejora->direccion = $request->input('direccion');
                $mejora->subdireccion = $request->input('subdireccion');
                $mejora->departamento = $request->input('depto');
                $mejora->valor = $request->input('valor');
                $mejora->desperdicio = $request->input('desperdicio');
                $mejora->inicio = $request->input('inicio');
                $mejora->final = $request->input('final');
                $mejora->asesor = $request->input('asesor');
                $mejora->id_autoriza = $request->input('id_jefe');
                $mejora->amejorar = $request->input('mejorar');
                $mejora->objetivo = $request->input('objetivo');
                $mejora->solucion = $request->input('solucion');
                $mejora->save();


                    // $part = $request->integ;
                    // $roll = $request->rol;
                    // $unir = Arr::collapse([$part, $roll]);

                    $ro=0;
                    foreach ($request->integ as $inte) 
                    {
                    
                    $integr[] = 0;
                    if (in_array($inte, $integr)){
                      if (($inte) == 0){  
                      }
                    }
                    else{
                        if (($inte) > 0){
                            $integr[] = $inte;
                                $propid = mejora::all();
                                $x = ($propid->last());
                                $integrante = new integrant();
                                $integrante->mejora_id = $x->id;
                                $integrante->empleado_id = $inte;
                                if(($ro) == 0){
                                    $integrante->rol = 1;
                                }
                                if(($ro) > 0){
                                    $integrante->rol = 2;   
                                }
                                $integrante->save();

                            }
                        }
                        $ro++;   
                    }

                    $propuesta = propuesta::where('id', '=', $request->id)->first();
                    $propuesta->identificador = 5;
                    $propuesta->save();
                }
            return view('mejorasrapidas.print', compact('mejora'));
        }
        if (($request->aprobada) == 1)
        {
           $propuesta = propuesta::where('id', '=', $request->id)->first();
           $propuesta->identificador = 6;
           $propuesta->comentarios = $request->input('observaciones');
           $propuesta->save();
           //dd($request->all());
        }
        return redirect()->route('propuesta1.index');
        
        //dd($data);
    }
    public function print(mejora $mejora)
    {
        return view('mejorasrapidas.print', compact('mejora'));
        //dd($request);
    }   
}
