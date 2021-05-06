<?php

namespace App\Http\Controllers;

use App\Carrusel;
use App\Http\Requests\CarruselRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CarruselController extends Controller
{
    public function edit()
    {
        $carrusel = Carrusel::findOrFail(1);
        return view('carrusel.edit', compact('carrusel'));
    }

    public function update(CarruselRequest $request)
    {

        $carrusel = Carrusel::findOrFail(1);
        $input    = $request->all();
        $carrusel->fill($input);

        for ($i = 1; $i <= 3; $i++) {

            if ($request->hasFile('img_' . $i)) {
                $file = $request->file('img_' . $i);
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path() . '/assets/img/', $name);
                $carrusel['img_' . $i] = $name;

            }

        }

        $user                     = Auth::user()->name;
        $carrusel->usuario_editor = $user;
        $date                     = Carbon::now('America/Caracas');
        $carrusel->fecha_edicion  = $date->toDateTimeString();

        $carrusel->save();

        return Redirect::to('home');
    }
}
