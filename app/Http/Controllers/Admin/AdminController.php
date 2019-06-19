<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\{Propiedades};
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::count();

        $propiedades = Propiedades::count();

        /*$descargas = LogUsuarios::where('evento','=','DESCARGA')
            ->whereMonth('created_at', '=' ,date("m"))    
            ->count();*/
        
        
        // FALTANDO LOS CLIENTES REGISTRADOS EN ATENCIONIKE
        //dd(auth()->user()->id);        

        return view('admin.index', compact('usuarios', 'propiedades'));
        return view('admin.index');
    }
}
