<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;
use App\Models\Casa;
use App\Models\Header; 


class VCasaController extends Controller
{
    public function index()
    {
        $header = Header::all(); 
        $casas = Casa::all();
        return view('ventas.casas.index',compact('header','casas'));
    }

    public function show(Casa $casa)
    {
        $header = Header::all();
        return view('ventas.casas.show',compact('header', 'casa'));
    }

    public function destroy(Casa $casa)
    {
        $casa->delete();
    
        return redirect()->route('casas.index')
                         ->with('success','Venta eliminado correctamente');
    }

    public function create()
    {
        $header = Header::all();
        return view('casas.create',compact('header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lugar' => 'required',

            'pago' => 'required',
            'facilidad' => 'required',
            'enganche' => 'required',
            'caracteristica' => 'required',

            'metros' => 'required',
            'banos' => 'required',
            'closet' => 'required',
            'piscina' => 'required',
            'valcon' => 'required',
            'terraza' => 'required',
            'rooftop' => 'required',
            'estacionamiento' => 'required',
            'seguridad' => 'required',
            'barda' => 'required',
            'verdes' => 'required',
            'parque' => 'required',
            'casaclub' => 'required',
            'porton' => 'required',
            'familyroom' => 'required',
            'sala' => 'required',
            'escalera' => 'required',
            'recamara' => 'required',
            'vestibulo' => 'required',
            'bodega' => 'required',
            'lavado' => 'required',
            'estudio' => 'required',

            'imagen1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen6' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen7' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen8' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen9' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
         $input = $request->all();
  
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }
        
        if ($imagen1 = $request->file('imagen1')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen1->getClientOriginalExtension();
            $imagen1->move($destinationPath, $profileImage);
            $input['imagen1'] = "$profileImage";
        }
        
        if ($imagen2 = $request->file('imagen2')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen2->getClientOriginalExtension();
            $imagen2->move($destinationPath, $profileImage);
            $input['imagen2'] = "$profileImage";
        }
        
        if ($imagen3 = $request->file('imagen3')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen3->getClientOriginalExtension();
            $imagen3->move($destinationPath, $profileImage);
            $input['imagen3'] = "$profileImage";
        }
        
        if ($imagen4 = $request->file('imagen4')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen4->getClientOriginalExtension();
            $imagen4->move($destinationPath, $profileImage);
            $input['imagen4'] = "$profileImage";
        }
        
        if ($imagen5 = $request->file('imagen5')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen5->getClientOriginalExtension();
            $imagen5->move($destinationPath, $profileImage);
            $input['imagen5'] = "$profileImage";
        }
        
        if ($imagen6 = $request->file('imagen6')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen6->getClientOriginalExtension();
            $imagen6->move($destinationPath, $profileImage);
            $input['imagen6'] = "$profileImage";
        }
        
        if ($imagen7 = $request->file('imagen7')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen7->getClientOriginalExtension();
            $imagen7->move($destinationPath, $profileImage);
            $input['imagen7'] = "$profileImage";
        }
        
        if ($imagen8 = $request->file('imagen8')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen8->getClientOriginalExtension();
            $imagen8->move($destinationPath, $profileImage);
            $input['imagen8'] = "$profileImage";
        }
        
        if ($imagen9 = $request->file('imagen9')) {
            $destinationPath = 'casa/';
            $profileImage =  uniqid().'_'.time() . '.' . $imagen9->getClientOriginalExtension();
            $imagen9->move($destinationPath, $profileImage);
            $input['imagen9'] = "$profileImage";
        }
    
        Casa::create($input);
     
        return redirect()->route('casas.index')
                        ->with('success','Venta creado correctamente.');
    }
    
     public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
