<?php

namespace App\Http\Controllers;

use App\Models\{Propiedades, TipoPropiedades, TipoOperacionPropiedades};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $tipPropiedades = TipoPropiedades::all();
        $tipOperaPropiedades = TipoOperacionPropiedades::all();
        
        $propiedades = Propiedades::with('imagenesPropiedades', 'caracteristicasPropiedades')
                        ->where('destacada', 1)->get();

        return view('propiedades.home', compact('propiedades', 'tipPropiedades', 'tipOperaPropiedades'));
    }
}
