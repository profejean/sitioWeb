<?php

namespace App\Http\Controllers;

use App\Aliado;
use App\Http\Requests\AliadoRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AliadoController extends Controller
{
    public function index()
    {
        $aliado = Aliado::orderBy('id', 'desc')->get();
        return view('aliado.index', compact('aliado'));
    }

    public function create()
    {

        return view('aliado.create');
    }

    public function store(AliadoRequest $request)
    {
        $aliado = new Aliado($request->all());

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/aliado/', $name);
            $aliado['img'] = $name;

        }

        $slug         = Str::slug($request->get('nombre'), '-');
        $aliado->slug = $slug;

        $user                   = Auth::user()->name;
        $aliado->usuario_editor = $user;
        $date                   = Carbon::now('America/Caracas');
        $aliado->fecha_edicion  = $date->toDateTimeString();

        $aliado->save();

        return Redirect::to('aliado');
    }

    public function edit($slug)
    {
        $aliado = Aliado::where('slug', '=', $slug)->first();
        return view('aliado.edit', compact('aliado'));
    }

    public function update(Request $request, $slug)
    {
        $aliado = Aliado::where('slug', '=', $slug)->first();
        $input  = $request->all();
        $aliado->fill($input);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/aliado/', $name);
            $aliado['img'] = $name;

        }

        $slug         = Str::slug($request->get('nombre'), '-');
        $aliado->slug = $slug;

        $user                   = Auth::user()->name;
        $aliado->usuario_editor = $user;
        $date                   = Carbon::now('America/Caracas');
        $aliado->fecha_edicion  = $date->toDateTimeString();

        $aliado->save();

        return Redirect::to('aliado');
    }

    public function delete($id)
    {
        $aliado = Aliado::findOrFail($id);
        $aliado->delete();
        return Redirect::to('aliado');
    }
}
