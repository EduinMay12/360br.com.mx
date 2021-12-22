<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Casa;
use App\Models\Blog;
use App\Models\Oficina;
use App\Models\Recidencia;
use App\Models\Departamento;
use App\Models\Houses;
use App\Models\Header;  
use App\Models\Terreno;
use Auth;
use Image;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function index(Request $request, User $model)
    {
        $header = Header::all();
        $casa = Casa::all();
        $oficina = Oficina::all(); 
        $recidencia = Recidencia::all(); 
        $departamento = Departamento::all();
        $terreno = Terreno::all();
        $blog = Blog::all();
        // Paginacion de 3 en 3 por cada crud
        $data = Terreno::orderBy('id','DESC')->paginate(1);
        $recidencia = Recidencia::orderBy('id','DESC')->paginate(1);
        $houses = Houses::orderBy('id','DESC')->paginate(1);
        $casa = Casa::orderBy('id','DESC')->paginate(1);
        $blog = Blog::orderBy('id','DESC')->paginate(1);
        $oficina = Oficina::orderBy('id','DESC')->paginate(1);
        $departamento = Departamento::orderBy('id','DESC')->paginate(1);
        //Vista DeL Inicio
        return view('/perfil.edit',compact('header', 'terreno','data','casa','departamento','oficina','recidencia','houses','blog'))
        ->with('i', ($request->input('page', 1) - 1) * 1);
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('./uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('perfil/edit', array('user' => Auth::user()) );

    }

    public function edit(Request $request)
    {
        $header = Header::all();
        $casa = Casa::all();
        $oficina = Oficina::all(); 
        $recidencia = Recidencia::all(); 
        $departamento = Departamento::all();
        $terreno = Terreno::all();
        $blog = Blog::all();
        // Contador
        $header_count = Header::count();
        $casa_count = Casa::count();
        $oficina_count = Oficina::count(); 
        $recidencia_count = Recidencia::count();
        $departamento_count = Departamento::count();
        $terreno_count = Terreno::count();
        $blog_count = Blog::count();
        // Paginacion de 3 en 3 por cada crud
        $data = Terreno::orderBy('id','DESC')->paginate(1);
        $recidencia = Recidencia::orderBy('id','DESC')->paginate(1);
        $houses = Houses::orderBy('id','DESC')->paginate(1);
        $casa = Casa::orderBy('id','DESC')->paginate(1);
        $blog = Blog::orderBy('id','DESC')->paginate(1);
        $oficina = Oficina::orderBy('id','DESC')->paginate(1);
        $departamento = Departamento::orderBy('id','DESC')->paginate(1);
        //Vista DeL Inicio
        return view('perfil.edit',compact('header', 'terreno', 'data', 'casa', 'departamento', 'oficina', 'recidencia', 'houses', 'blog', 'terreno_count','casa_count','departamento_count','oficina_count','recidencia_count','blog_count'))
        ->with('i', ($request->input('page', 1) - 1) * 1);
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Perfil actualizado'));
    }


    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Contrase���a actualizada'));
    }
}
