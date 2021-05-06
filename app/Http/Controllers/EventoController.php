<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests\EventoRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class EventoController extends Controller
{
    public function index()
    {
        $evento = Evento::orderBy('id', 'desc')->paginate(10);
        return view('evento.index', compact('evento'));
    }

    public function show($slug)
    {
        $evento = Evento::where('slug', '=', $slug)->first();
        return view('evento.show', compact('evento'));
    }

    public function edit($slug)
    {
        $evento = Evento::where('slug', '=', $slug)->first();
        return view('evento.edit', compact('evento'));
    }

    public function update(EventoRequest $request, $slug)
    {
        $evento = Evento::where('slug', '=', $slug)->first();
        $input  = $request->all();
        $evento->fill($input);

        if ($request->hasFile('resumen_img')) {
            $file = $request->file('resumen_img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $evento['resumen_img'] = $name;

        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/pdf/', $name);
            $evento['pdf'] = $name;

        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/video/', $name);
            $evento['video'] = $name;

        }

        $slug         = Str::slug($request->get('resumen_titulo'), '-');
        $evento->slug = $slug;

        $user                   = Auth::user()->name;
        $evento->usuario_editor = $user;
        $date                   = Carbon::now('America/Caracas');
        $evento->fecha_edicion  = $date->toDateTimeString();

        $evento->save();

        return Redirect::to('evento');
    }

    public function create()
    {

        return view('evento.create');
    }

    public function store(EventoRequest $request)
    {
        $evento = new Evento($request->all());

        if ($request->hasFile('resumen_img')) {
            $file = $request->file('resumen_img');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img/', $name);
            $evento['resumen_img'] = $name;

        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/pdf/', $name);
            $evento['pdf'] = $name;

        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/video/', $name);
            $evento['video'] = $name;

        }

        $slug         = Str::slug($request->get('resumen_titulo'), '-');
        $evento->slug = $slug;

        $user                   = Auth::user()->name;
        $evento->usuario_editor = $user;
        $date                   = Carbon::now('America/Caracas');
        $evento->fecha_edicion  = $date->toDateTimeString();

        $evento->save();

        return Redirect::to('evento');
    }

    public function delete($id)
    {
        $evento = Evento::where('id', '=', $id)->first();
        $evento->delete();
        return Redirect::to('evento');
    }

    public function descargar($slug)
    {
        $evento = Evento::where('slug', '=', $slug)->first();
        $pdf    = public_path() . '/assets/pdf/' . $evento->pdf;

        return response()->file($pdf);
    }
}
