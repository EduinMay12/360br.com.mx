<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Casa;
use App\Models\Blog;
use App\Models\Oficina;
use App\Models\Recidencia;
use App\Models\Departamento;
use App\Models\Houses;
use App\Models\Header; 
use App\Models\Terreno;
use Illuminate\Support\Arr;
use DB;
use Hash;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $header = Header::all();
        $casa = Casa::all();
        $oficina = Oficina::all(); 
        $recidencia = Recidencia::all(); 
        $departamento = Departamento::all();
        $terreno = Terreno::all();
        $blog = Blog::all();
        // Paginacion de 3 en 3 por cada crud
        $data = Terreno::orderBy('id','DESC')->paginate(2);
        $recidencia = Recidencia::orderBy('id','DESC')->paginate(3);
        $houses = Houses::orderBy('id','DESC')->paginate(3);
        $casa = Casa::orderBy('id','DESC')->paginate(3);
        $blog = Blog::orderBy('id','DESC')->paginate(2);
        $oficina = Oficina::orderBy('id','DESC')->paginate(3);
        $departamento = Departamento::orderBy('id','DESC')->paginate(3);
        //Vista DeL Inicio
        return view('welcome',compact('header', 'terreno','data','casa','departamento','oficina','recidencia','houses','blog'))
                    ->with('i', ($request->input('page', 1) - 1) * 1);
    }
}
