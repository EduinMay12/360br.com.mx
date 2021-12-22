<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Arr;
use App\Models\Header; 
    
class UserController extends Controller
{

    public function index(Request $request)
    {
        $header = Header::all();
        $roles = Role::pluck('name','name')->all(); 
        $data = User::orderBy('id','DESC')->paginate(1000000000000000000);
        return view('users.index',compact('header','roles','data',))
            ->with('i', ($request->input('page', 1) - 1) * 1000000000000000000);
    }
    
    public function create()
    {
        $header = Header::all();
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('header','roles'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','Usuario creada con éxito');
    }
    
    public function show($id)
    {
        $header = Header::all();
        $user = User::find($id);
        return view('users.show',compact('header','user'));
    }
    
    public function edit($id)
    {
        $header = Header::all();

        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole','header'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('warning','Usuario actualizada con éxito');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('danger','Usuario eliminado exitosamente');
    }
}