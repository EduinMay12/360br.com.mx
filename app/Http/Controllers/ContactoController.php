<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header; 

class ContactoController extends Controller
{

    public function index()
    {
        $header = Header::all();
        return view('contacto.index',compact('header'));
    }
}
