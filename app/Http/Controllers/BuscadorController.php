<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuscadorRequest;

class BuscadorController extends Controller
{
    public function busquedaPrincipal(BuscadorRequest $request)
    {
        //$tprop_id = $request->input("tprop_id");
       //$topeprop_id = $request->input("topeprop_id");

        $request()->validate();

        // var_dump($tprop_id);
        // var_dump($topeprop_id);
        // var_dump($datos);
        //var_dump(request()->all());
        //die("trabajando");
        // $propiedades = Propiedades::with('imagenesPropiedades', 'caracteristicasPropiedades')
        //                 ->orderByDesc('created_at')->paginate(1);

        // return view('propiedades.index', compact('propiedades'));
    }
}
