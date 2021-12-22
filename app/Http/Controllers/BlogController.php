<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Blog;


class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:Crear Blog', ['only' => ['create','store']]);
         $this->middleware('permission:Editar Blog', ['only' => ['edit','update']]);
         $this->middleware('permission:Eliminar Blog', ['only' => ['destroy']]);
    }

    public function index(Request $request, Blog $blog)
    {
        $header = Header::all();
        $blogs = Blog::all();
        return view('blog.index',compact('blogs', 'header'));
    }

    public function show(Blog $blog)
    {
        $header = Header::all();
        return view('blog.show',compact('header', 'blog'));
    } 

    public function destroy(Blog $blog)
    {
        $blog->delete();
    
        return redirect()->route('blog.index')
                         ->with('success','Blog eliminado correctamente');
    }

    public function create()
    {
        $header = Header::all();
        return view('blog.create',compact('header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo1' => 'required',
            'tema1' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:21048'
        ]);
    
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage =  uniqid().'_'.time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($image1 = $request->file('image1')) {
            $destinationPath = 'image/';
            $profileImage1 =  uniqid().'_'.time() . '.' . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage1);
            $input['image1'] = "$profileImage1";
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage2 =  uniqid().'_'.time() . '.' . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage2);
            $input['image2'] = "$profileImage2";
        }
    
        if ($image3 = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage3 =  uniqid().'_'.time() . '.' . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage3);
            $input['image3'] = "$profileImage3";
        }

        Blog::create($input);
     
        return redirect()->route('blog.index')
                         ->with('success','Blog creado correctamente.');
    }

    public function edit(Blog $blog)
    {
        $header = Header::all();
        return view('blog.edit',compact('header','blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'titulo1' => 'required',
            'tema1' => 'required',
            'imagen1' => 'required',
          

            'tema2' => 'required',
            'descripcion' => 'required'
        ]);
    
        $blog->update($request->all());
    
        return redirect()->route('blog.index')
                        ->with('success','Blog actulizado correctamente');
    }

}
