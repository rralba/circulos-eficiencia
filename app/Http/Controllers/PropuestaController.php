<?php

namespace App\Http\Controllers;

use App\empleado;
use App\propuesta;
use App\attach;
use App\integrantes_propuesta;
use Illuminate\Http\Request;
use DB;

class PropuestaController extends Controller
{

    public function index()
    {
        return view('propuesta');
    }

    public function store(Request $request)
    {
        $propuesta = new propuesta();
          $propuesta->identificador = $request->input('identificador');
          $propuesta->registro = $request->input('registro');
          $propuesta->direccion = $request->input('direccion');
          $propuesta->subdireccion = $request->input('subdireccion');
          $propuesta->departamento = $request->input('departamento');
          $propuesta->contacto = $request->input('contacto');
          $propuesta->clave = $request->input('clave');
          $propuesta->extension = $request->input('extension');
          $propuesta->id_autoriza = $request->input('id_autoriza');
          $propuesta->inicio = $request->input('inicio');
          $propuesta->final = $request->input('final');
          $propuesta->proyecto = $request->input('proyecto');
          $propuesta->areas_part = $request->input('areas_part');
          $propuesta->skills_integ = $request->input('skills_integ');
          $propuesta->conocimiento_critico = $request->input('conocimiento_critico');
          $propuesta->sindicalizados = $request->input('sindicalizados');
          $propuesta->principales_act = $request->input('principales_act');
          $propuesta->beneficio_eco = $request->input('beneficio_eco');
          $propuesta->mejorar = $request->input('mejorar');
          $propuesta->objetivo = $request->input('objetivo');
          $propuesta->solucion = $request->input('solucion');
          $propuesta->save();
        
        
        if (($request->integrantes) == 2)
        {
        	foreach ($request->integp as $inte) 
        	{
        		if (($inte) > 0){
        			$propid = propuesta::all();
        			$x = ($propid->last());
        			$integrante = new integrantes_propuesta();
        			$integrante->propuesta_id = $x->id;
        			$integrante->empleado_id = $inte;
        			$integrante->save();
        			$r[] = array($inte);
        		}	
        		
        	}
        }
        else
        {
        	if (($request->integrantes) == 3)
		        {
		        	foreach ($request->integm as $inte) 
		        	{
		        		if (($inte) > 0){
		        			$propid = propuesta::all();
		        			$x = ($propid->last());
		        			$integrante = new integrantes_propuesta();
		        			$integrante->propuesta_id = $x->id;
		        			$integrante->empleado_id = $inte;
		        			$integrante->save();
		        			$r[] = array($inte);
		        		}	
		        		
		        	}
		        }
        }
        
        $propid = propuesta::all();
        $r = ($propid->last());
        $x = $r->id;
        $y = 'solicitud guardada con exito, con numero de folio';
        $z = "$y" . " ". "$x";
        return redirect()->back()->with('info',$z);
        //dd($request->all());
    }
    /*
   AJAX request
   */
   public function getEmployees(Request $request){

      $search = $request->search;

      if($search == ''){
         $employees = empleado::orderby('nombre','asc')->select('id','nombre','posicion')->limit(5)->get();
      }else{
         $employees = empleado::orderby('nombre','asc')->select('id','nombre','posicion')->where('nombre', 'like', '%' .$search . '%')->limit(20)->get();
      }

      $response = array();
      foreach($employees as $employee){
         $response[] = array("value"=>$employee->id,"label"=>$employee->nombre,"depto"=>$employee->posicion);
      }

      return response()->json($response);
   }
}
