@extends('layouts.vista')

@section('content')

<div class="container">

    <form action="{{Route('carrusel_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Carrusel') }}</div>

                <div class="card-body">
                    <?php for ($i=1; $i <= 3; $i++) { ?>
                    <div class="form-group row">
                        <label for="titulo_{{$i}}" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo '.$i) }}</label>

                        <div class="col-md-6">
                            <input id="titulo_{{$i}}" type="text" class="form-control @error('titulo_'.$i) is-invalid @enderror" name="titulo_{{$i}}" value="{{ !empty(old('titulo_'.$i)) ? old('titulo_'.$i) : (!empty($carrusel['titulo_'.$i]) ? $carrusel['titulo_'.$i] : 'Titulo ') }}" autofocus required>

                            @error('titulo_'.$i)
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contenido_{{$i}}" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido '.$i) }}</label>

                        <div class="col-md-6">
                            <textarea id="contenido_{{$i}}" class="form-control @error('contenido_'.$i) is-invalid @enderror" name="contenido_{{$i}}" style="width: 100%;" rows="4" required>{{ !empty(old('contenido_'.$i)) ? old('contenido_'.$i) : (!empty($carrusel['contenido_'.$i]) ? $carrusel['contenido_'.$i] : 'Contenido '.$i) }}</textarea>


                            @error('contenido_'.$i)
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img_{{$i}}" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen '.$i) }}</label>

                        <div class="col-md-6">
                            <input id="img_{{$i}}" type="file" class="form-control @error('img_'.$i) is-invalid @enderror" name="img_{{$i}}"  autocomplete="img_{{$i}}" value="{{$carrusel['img_'.$i]}}">

                            @error('img_'.$i)
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="form-group row">

                        <div class="col-auto justify-content-center">
                           <img src="{{asset('assets/img/'.$carrusel['img_'.$i])}}" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <?php } ?>


                    <div class="form-group row justify-content-center mt-5">
                        

                        <div class="col-auto">
                            <button class="btn btn-warning" type="submit">Enviar</button>
                        </div>
                        
                    </div>
            </div>
        </div>
        </div>
    </div>

    </form>
</div>

@endsection
