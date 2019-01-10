<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedades;

class HomeController extends Controller
{
    public function index()
    {
        //$propiedades = Propiedades::all();
        $propiedades = Propiedades::where('destacada', 1)->get();

        //Falta relacionar con las imagenes :(
        dd($propiedades);

        return view('propiedades.home', compact('propiedades'));
    }
}
