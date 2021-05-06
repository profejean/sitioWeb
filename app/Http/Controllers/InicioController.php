<?php

namespace App\Http\Controllers;

use App\Aliado;
use App\Aprendizaje;
use App\Carrusel;
use App\Evento;
use App\Http\Requests\InicioRequest;
use App\Identidad;
use App\Inicio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class InicioController extends Controller
{
    public function index()
    {
        $inicio      = Inicio::findOrFail(1);
        $aprendizaje = Aprendizaje::findOrFail(1);
        $us          = Identidad::findOrFail(1);
        $carrusel    = Carrusel::findOrFail(1);
        $aliado      = Aliado::orderBy('id', 'desc')->get();
        $evento      = Evento::orderBy('id', 'desc')->take(3)->get();

        return view('inicio', compact('inicio', 'carrusel', 'us', 'aprendizaje', 'evento', 'aliado'));
    }

    public function edit()
    {

        $inicio = Inicio::findOrFail(1);
        return view('inicio.edit', compact('inicio'));
    }

    public function update(InicioRequest $request)
    {

        $inicio = Inicio::findOrFail(1);
        $input  = $request->all();
        $inicio->fill($input);

        $user                   = Auth::user()->name;
        $inicio->usuario_editor = $user;
        $date                   = Carbon::now('America/Caracas');
        $inicio->fecha_edicion  = $date->toDateTimeString();

        $inicio->save();

        return Redirect::to('home');
    }
}
