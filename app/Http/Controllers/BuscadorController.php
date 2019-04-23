<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function busquedaPrincipal(Request $request)
    {
        //$tprop_id = $request->input("tprop_id");
       //$topeprop_id = $request->input("topeprop_id");

        $datos = request()->validate([
            'tprop_id' => Rule::requiredIf(function () use ($request) {
                return $request->topeprop_id != 0;
            }),
            'topeprop_id' => Rule::requiredIf(function () use ($request) {
                return $request->tprop_id != 0;
            }),
        ],
        [
            //'tprop_id.min' => 'Debe seleccionar al menos un campo.'
        ]);

      /*   $datos = request()->validate([
            'tprop_id' => 'required',
            'topeprop_id' => 'required_if:tprop_id,1'
        ],
        [
            //'tprop_id.min' => 'Debe seleccionar al menos un campo.'
        ]); */

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
