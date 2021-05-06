<?php

namespace App\Http\Controllers;

use App\Aprendizaje;
use App\Http\Requests\AprendizajeRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AprendizajeController extends Controller
{
    public function edit()
    {

        $aprendizaje = Aprendizaje::findOrFail(1);
        return view('aprendizaje.edit', compact('aprendizaje'));
    }

    public function update(AprendizajeRequest $request)
    {

        $aprendizaje = Aprendizaje::findOrFail(1);

        $input = $request->all();

        $aprendizaje->fill($input);

        $user                        = Auth::user()->name;
        $aprendizaje->usuario_editor = $user;
        $date                        = Carbon::now('America/Caracas');
        $aprendizaje->fecha_edicion  = $date->toDateTimeString();

        $aprendizaje->save();

        return Redirect::to('home');

    }
}
