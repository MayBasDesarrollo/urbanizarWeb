<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Propiedades, TipoCaracteristicas};

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedades::with('imagenesPropiedades', 'caracteristicasPropiedades')
                        ->orderByDesc('created_at')->paginate(2);

        return view('propiedades.index', compact('propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show(Propiedades $propiedad)
    {
        $tipoCaracteristicas = TipoCaracteristicas::all();
        $caracteristicas = $propiedad->caracteristicasPropiedades->toArray();

        foreach ($caracteristicas as $key => $caracteristica) {
            foreach ($tipoCaracteristicas as $key => $tipo) {
                if ($caracteristica['tcarac_id'] == $tipo->id) {
                    array_push($caracteristica, $tipo->descripcion, $tipo->icono);
                    $detalles_caracteristicas[] = $caracteristica;
                }
            }
        }

        $detalles = collect($detalles_caracteristicas);

        return view('propiedades.show', compact('propiedad', 'detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
