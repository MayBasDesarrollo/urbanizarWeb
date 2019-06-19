<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Propiedades};

class BuscadorController extends Controller
{
    public function busquedaPrincipal(Request $request)
    {
        $tprop_id = $request->input("tprop_id");
        $topeprop_id = $request->input("topeprop_id");

        if( $tprop_id == 0 && $topeprop_id == 0){
            return redirect('/')->withErrors([
                'mensaje' => 'Por favor intruduzca al menos un dato.'
            ]);
        }

        $propiedades = Propiedades::with('imagenesPropiedades', 'caracteristicasPropiedades')
                        ->where('tprop_id', $tprop_id)
                        ->orWhere('topeprop_id', $topeprop_id)
                        ->orderByDesc('created_at')
                        ->paginate(3);

        return view('propiedades.index', compact('propiedades'));
    }
}
