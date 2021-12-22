<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header; 


class VentaController extends Controller
{
    public function index()
    {
        $header = Header::all();
        return view('venta.index', compact('header'));
    }
}
