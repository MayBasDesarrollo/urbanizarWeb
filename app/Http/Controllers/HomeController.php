<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $propiedades = Propiedades::with('imagenesPropiedades')->where('destacada', 1)->get();

        return view('propiedades.home', compact('propiedades'));
    }
}
