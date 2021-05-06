<?php

namespace App\Http\Controllers;

use App\Apoyo;
use App\Http\Requests\ApoyoRequest;
use App\Http\Requests\TerapeutaRequest;
use App\Inicio;
use App\Terapeuta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class OrientacionController extends Controller
{
    public function index()
    {
        $terapeuta = Terapeuta::orderBy('id', 'desc')->get();
        $apoyo     = Apoyo::orderBy('id', 'desc')->get();
        $inicio    = Inicio::findOrFail(1);
        return view('orientacion.index', compact('terapeuta', 'inicio', 'apoyo'));
    }

    public function indexTerapeuta()
    {
        $terapeuta = Terapeuta::orderBy('id', 'desc')->get();
        return view('terapeuta.index', compact('terapeuta'));
    }

    public function createTerapeuta()
    {

        return view('terapeuta.create');
    }

    public function storeTerapeuta(TerapeutaRequest $request)
    {
        $terapeuta = new Terapeuta($request->all());

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/terapeuta/', $name);
            $terapeuta['img'] = $name;

        }

        $slug            = Str::slug($request->get('nombre'), '-');
        $terapeuta->slug = $slug;

        $user                      = Auth::user()->name;
        $terapeuta->usuario_editor = $user;
        $date                      = Carbon::now('America/Caracas');
        $terapeuta->fecha_edicion  = $date->toDateTimeString();

        $terapeuta->save();

        return Redirect::to('terapeuta');
    }

    public function editTerapeuta($slug)
    {
        $terapeuta = Terapeuta::where('slug', '=', $slug)->first();
        return view('terapeuta.edit', compact('terapeuta'));
    }

    public function updateTerapeuta(Request $request, $slug)
    {
        $terapeuta = Terapeuta::where('slug', '=', $slug)->first();
        $input     = $request->all();
        $terapeuta->fill($input);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/terapeuta/', $name);
            $terapeuta['img'] = $name;

        }

        $slug            = Str::slug($request->get('nombre'), '-');
        $terapeuta->slug = $slug;

        $user                      = Auth::user()->name;
        $terapeuta->usuario_editor = $user;
        $date                      = Carbon::now('America/Caracas');
        $terapeuta->fecha_edicion  = $date->toDateTimeString();

        $terapeuta->save();

        return Redirect::to('terapeuta');
    }

    public function deleteTerapeuta($id)
    {
        $terapeuta = Terapeuta::findOrFail($id);
        $terapeuta->delete();
        return Redirect::to('terapeuta');
    }

    public function indexApoyo()
    {
        $apoyo = Apoyo::orderBy('id', 'desc')->get();
        return view('apoyo.index', compact('apoyo'));
    }

    public function createApoyo()
    {

        return view('apoyo.create');
    }

    public function storeApoyo(ApoyoRequest $request)
    {
        $apoyo = new Apoyo($request->all());

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/apoyo/', $name);
            $apoyo['img'] = $name;

        }

        $slug        = Str::slug($request->get('nombre'), '-');
        $apoyo->slug = $slug;

        $user                  = Auth::user()->name;
        $apoyo->usuario_editor = $user;
        $date                  = Carbon::now('America/Caracas');
        $apoyo->fecha_edicion  = $date->toDateTimeString();

        $apoyo->save();

        return Redirect::to('apoyo');
    }

    public function editApoyo($slug)
    {
        $apoyo = apoyo::where('slug', '=', $slug)->first();
        return view('apoyo.edit', compact('apoyo'));
    }

    public function updateApoyo(ApoyoRequest $request, $slug)
    {
        $apoyo = Apoyo::where('slug', '=', $slug)->first();
        $input = $request->all();
        $apoyo->fill($input);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/apoyo/', $name);
            $apoyo['img'] = $name;

        }

        $slug        = Str::slug($request->get('nombre'), '-');
        $apoyo->slug = $slug;

        $user                  = Auth::user()->name;
        $apoyo->usuario_editor = $user;
        $date                  = Carbon::now('America/Caracas');
        $apoyo->fecha_edicion  = $date->toDateTimeString();

        $apoyo->save();

        return Redirect::to('apoyo');
    }

    public function deleteApoyo($id)
    {
        $apoyo = Apoyo::findOrFail($id);
        $apoyo->delete();
        return Redirect::to('apoyo');
    }

}
