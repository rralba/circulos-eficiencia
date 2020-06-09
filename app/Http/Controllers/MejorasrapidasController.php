<?php

namespace App\Http\Controllers;

use App\integrant;
use App\empleado;
use App\beneficio;
use App\reconocimiento;
use App\mejora;
use Illuminate\Http\Request;
use DB;

class MejorasrapidasController extends Controller
{
    public function index()
    {
        $mejoras = DB::table('mejoras')
        ->where('status', '=', '1')
        ->get();
        return view('mejorasrapidas.index', ['mejoras' => $mejoras]);
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
}
