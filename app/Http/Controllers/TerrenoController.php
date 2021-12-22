<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Header;
use App\Models\Blog;
use App\Models\Terreno;
use DB;
use Illuminate\Support\Arr;


class TerrenoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:Crear Lotes', ['only' => ['create','store']]);
         $this->middleware('permission:Editar Lotes', ['only' => ['edit','update']]);
         $this->middleware('permission:Eliminar Lotes', ['only' => ['destroy']]);
    }

    public function index()
    {
        $header = Header::all();
        $terrenos = Terreno::all();
        return view('terreno.index',compact('header', 'terrenos'));
    }

    public function show(Terreno $terreno, Header $header)
    {
        $header = Header::all();
        return view('terreno.show',compact('header', 'terreno'));
    } 

    public function destroy(Terreno $terreno)
    {
        $terreno->delete();
    
        return redirect()->route('terreno.index')
                         ->with('success','Terreno eliminado correctamente');
    }

    public function create()
    {
        $header = Header::all();
        return view('terreno.create',compact('header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
          
            'lugar' => 'required',
            'metros' => 'required',
            'pago' => 'required',
            'facilidad' => 'required',
            'enganche' => 'required',
            'caracteristica' => 'required', 

            'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen6' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen7' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen8' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'imagen9' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048'
        ]);

        $input = $request->all();
  
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }
        
        if ($imagen1 = $request->file('imagen1')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen1->getClientOriginalExtension();
            $imagen1->move($destinationPath, $profileImage);
            $input['imagen1'] = "$profileImage";
        }
        
        if ($imagen2 = $request->file('imagen2')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen2->getClientOriginalExtension();
            $imagen2->move($destinationPath, $profileImage);
            $input['imagen2'] = "$profileImage";
        }
        
        if ($imagen3 = $request->file('imagen3')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen3->getClientOriginalExtension();
            $imagen3->move($destinationPath, $profileImage);
            $input['imagen3'] = "$profileImage";
        }
        
        if ($imagen4 = $request->file('imagen4')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen4->getClientOriginalExtension();
            $imagen4->move($destinationPath, $profileImage);
            $input['imagen4'] = "$profileImage";
        }
        
        if ($imagen5 = $request->file('imagen5')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen5->getClientOriginalExtension();
            $imagen5->move($destinationPath, $profileImage);
            $input['imagen5'] = "$profileImage";
        }
        
        if ($imagen6 = $request->file('imagen6')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen6->getClientOriginalExtension();
            $imagen6->move($destinationPath, $profileImage);
            $input['imagen6'] = "$profileImage";
        }
        
        if ($imagen7 = $request->file('imagen7')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen7->getClientOriginalExtension();
            $imagen7->move($destinationPath, $profileImage);
            $input['imagen7'] = "$profileImage";
        }
        
        if ($imagen8 = $request->file('imagen8')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen8->getClientOriginalExtension();
            $imagen8->move($destinationPath, $profileImage);
            $input['imagen8'] = "$profileImage";
        }
        
        if ($imagen9 = $request->file('imagen9')) {
            $destinationPath = 'lote/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen9->getClientOriginalExtension();
            $imagen9->move($destinationPath, $profileImage);
            $input['imagen9'] = "$profileImage";
        }
    
        Terreno::create($input);
     
        return redirect()->route('terreno.index')
                        ->with('success','Blog creado correctamente.');
    }

    public function edit(Terreno $terreno)
    {
        $header = Header::all();
        return view('terreno.edit',compact('header','terreno'));
    }

    public function update(Request $request, Terreno $terreno)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
          
            'lugar' => 'required',
            'metros' => 'required',
            'pago' => 'required',
            'facilidad' => 'required',
            'enganche' => 'required',
            'caracteristica' => 'required',

            'imagen1' => 'required',
            'imagen2' => 'required',
            'imagen3' => 'required',
            'imagen4' => 'required',
            'imagen5' => 'required',
            'imagen6' => 'required',
            'imagen7' => 'required',
            'imagen8' => 'required',
            'imagen9' => 'required'
        ]);
    
        $terreno->update($request->all());
    
        return redirect()->route('terreno.index')
                        ->with('success','Terreno actulizado correctamente');
    }
}
