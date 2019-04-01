<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\beneficio;
use App\reconocimiento;
use Illuminate\Http\Request;
use DB;

class BeneficioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficios = beneficio::paginate();
        return view('beneficios.index', compact('beneficios'));
        // dd($beneficios->all());  
    }
}
