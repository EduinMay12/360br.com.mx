<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Arr;

class HeaderController extends Controller
{
    public function index()
    {
        $data = Header::orderBy('id','desc')->paginate(1)->setPath('data');
        $header = Header::all();
        return view('header.index',compact(['header','data']));
    }

    public function edit($id)
    {
        $header = Header::findOrFail($id);
        return view('home', compact('header'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $header = Header::findOrFail($id);
        $header->update($requestData);

        return redirect()->route('header.index')->with('flash_message', 'Puesto actualizado');
    }

}
