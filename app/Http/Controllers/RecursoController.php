<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Inicio;
use App\Pildora;

class RecursoController extends Controller
{
    public function recurso()
    {
        $inicio   = Inicio::findOrFail(1);
        $pildora  = Pildora::findOrFail(1);
        $articulo = Articulo::orderBy('id', 'desc')->take(8)->get();
        return view('recurso.index', compact('pildora', 'inicio', 'articulo'));
    }
}
