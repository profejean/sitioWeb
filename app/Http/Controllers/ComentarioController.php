<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Http\Requests\ComentarioRequest;
use App\Http\Requests\SesionRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ComentarioController extends Controller
{
    public function comentarios(ComentarioRequest $request)
    {
        $comentario              = new Comentario();
        $comentario->comentario  = $request->get('comentario');
        $comentario->articulo_id = $request->get('articulo_id');
        $comentario->usuario     = Auth::user()->name;
        $date                    = Carbon::now('America/Caracas');
        $comentario->hora        = $date->toTimeString();
        $comentario->fecha       = $date->toDateString();
        $comentario->save();

        return Redirect::back()->withErrors(['Tu comentario se a agregado con exito']);

    }

    public function sesion(SesionRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return Redirect::back()->withErrors(['Ya puedes hacer tus comentarios']);
        } else {
            return Redirect::back()->withErrors(['Tus datos son incorrectos']);
        }
    }

}
