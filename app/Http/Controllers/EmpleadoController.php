<?php

namespace App\Http\Controllers;

use App\empleado;
use App\propuesta;
use App\attach;
use App\integrantes_propuesta;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    /*
   AJAX request
   */
   public function getEmployees(Request $request){

      $search = $request->search;

      if($search == ''){
         $employees = empleado::orderby('nombre','asc')->select('id','nombre','depto')->limit(5)->get();
      }else{
         $employees = empleado::orderby('nombre','asc')->select('id','nombre','depto','posicion','cia','direccion')->where('nombre', 'like', '%' .$search . '%')->limit(20)->get();
      }

      $response = array();
      foreach($employees as $employee){
         $response[] = array("id"=>$employee->id,"nombre"=>$employee->nombre,"depto"=>$employee->depto,"posicion"=>$employee->posicion,"cia"=>$employee->cia,"direccion"=>$employee->direccion);
      }

      return response()->json($response);
   }
}
