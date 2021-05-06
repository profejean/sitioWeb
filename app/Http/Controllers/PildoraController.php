<?php

namespace App\Http\Controllers;

use App\Http\Requests\PildoraRequest;
use App\Pildora;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PildoraController extends Controller
{
    public function edit()
    {

        $pildora = Pildora::findOrFail(1);
        return view('pildora.edit', compact('pildora'));
    }

    public function update(PildoraRequest $request)
    {

        $pildora = Pildora::findOrFail(1);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $pildora['img'] = $name;

        }

        $user                    = Auth::user()->name;
        $pildora->usuario_editor = $user;
        $date                    = Carbon::now('America/Caracas');
        $pildora->fecha_edicion  = $date->toDateTimeString();

        $pildora->save();

        return Redirect::to('home');

    }
}
