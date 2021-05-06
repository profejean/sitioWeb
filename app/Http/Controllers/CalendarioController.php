<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Inicio;

class CalendarioController extends Controller
{
    public function calendario()
    {
        $inicio = Inicio::findOrFail(1);
        $evento = Evento::all();
        $evento->toJson();

        return view('calendario.index', compact('evento', 'inicio'));
    }
}
