<?php

namespace App\Http\Controllers;

use App\Models\{Propiedades, CaracteristicasPropiedades};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $propiedades = Propiedades::with('imagenesPropiedades', 'caracteristicasPropiedades')->where('destacada', 1)->get();

        return view('propiedades.home', compact('propiedades'));
    }
}
