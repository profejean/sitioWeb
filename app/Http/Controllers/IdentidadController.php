<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdentidadRequest;
use App\Identidad;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IdentidadController extends Controller
{

    public function edit()
    {

        $us = Identidad::findOrFail(1);
        return view('identidad.edit', compact('us'));
    }

    public function update(IdentidadRequest $request)
    {

        $identidad = Identidad::findOrFail(1);

        $input = $request->all();

        $identidad->fill($input);

        if ($request->hasFile('mision_imagen')) {
            $file = $request->file('mision_imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $identidad['mision_imagen'] = $name;

        }

        if ($request->hasFile('objetivo_imagen')) {
            $file = $request->file('objetivo_imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $identidad['objetivo_imagen'] = $name;

        }

        if ($request->hasFile('vision_imagen')) {
            $file = $request->file('vision_imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $identidad['vision_imagen'] = $name;

        }

        $user                      = Auth::user()->name;
        $identidad->usuario_editor = $user;
        $date                      = Carbon::now('America/Caracas');
        $identidad->fecha_edicion  = $date->toDateTimeString();

        $identidad->save();

        return Redirect::to('home');

    }

}
