<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Comentario;
use App\Http\Requests\ArticuloRequest;
use App\Inicio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulo = Articulo::orderBy('id', 'desc')->paginate(10);
        return view('articulo.index', compact('articulo'));
    }

    public function show($slug)
    {

        $inicio     = Inicio::findOrFail(1);
        $articulo   = Articulo::where('slug', '=', $slug)->first();
        $comentario = Comentario::where('articulo_id', '=', $articulo->id)->orderBy('id', 'desc')->get();
        return view('articulo.show', compact('articulo', 'inicio', 'comentario'));
    }

    public function edit($slug)
    {
        $articulo = Articulo::where('slug', '=', $slug)->first();
        return view('articulo.edit', compact('articulo'));
    }

    public function update(ArticuloRequest $request, $slug)
    {
        $articulo = Articulo::where('slug', '=', $slug)->first();
        $input    = $request->all();
        $articulo->fill($input);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/gallery/', $name);
            $articulo['img'] = $name;

        }

        $slug           = Str::slug($request->get('titulo'), '-');
        $articulo->slug = $slug;

        $user                     = Auth::user()->name;
        $articulo->usuario_editor = $user;
        $date                     = Carbon::now('America/Caracas');
        $articulo->fecha_edicion  = $date->toDateTimeString();

        $articulo->save();

        return Redirect::to('articulo');
    }

    public function create()
    {

        return view('articulo.create');
    }

    public function store(ArticuloRequest $request)
    {
        $articulo = new Articulo($request->all());

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/gallery/', $name);
            $articulo['img'] = $name;

        }

        $slug           = Str::slug($request->get('titulo'), '-');
        $articulo->slug = $slug;

        $user                     = Auth::user()->name;
        $articulo->usuario_editor = $user;
        $date                     = Carbon::now('America/Caracas');
        $articulo->fecha_edicion  = $date->toDateTimeString();

        $articulo->save();

        return Redirect::to('articulo');
    }

    public function delete($id)
    {
        $articulo = Articulo::where('id', '=', $id)->first();
        $articulo->delete();
        return Redirect::to('articulo');
    }

}
