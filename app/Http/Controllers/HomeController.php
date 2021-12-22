<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Header;
use App\Models\Terreno;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $header = Header::all();
        $terrenos = Terreno::all();
        return view('home',compact('header', 'terrenos'));
    }
}
