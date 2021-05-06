@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('aprendizaje_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Aprendizaje') }}</div>

                <div class="card-body">
                    
                    <h3 class="text-white">Alcance</h3>
                    <div class="form-group row">
                        <label for="titulo_alcance" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del alcance ') }}</label>

                        <div class="col-md-6">
                            <textarea name="titulo_alcance" style="width: 100%;" rows="4" class="form-control @error('titulo_alcance') is-invalid @enderror" required>{{$aprendizaje->titulo_alcance}}</textarea>

                            @error('titulo_alcance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="texto_alcance" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto del alcance ') }}</label>

                        <div class="col-md-6">
                            <textarea name="texto_alcance" style="width: 100%;" rows="4" class="form-control @error('texto_alcance') is-invalid @enderror" required>{{$aprendizaje->texto_alcance}}</textarea>

                            @error('texto_alcance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h3 class="text-white">Descripción</h3>
                    <div class="form-group row">
                        <label for="titulo_descripcion" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del descripción ') }}</label>

                        <div class="col-md-6">
                            <textarea name="titulo_descripcion" style="width: 100%;" rows="4" class="form-control @error('titulo_descripcion') is-invalid @enderror" required>{{$aprendizaje->titulo_descripcion}}</textarea>

                            @error('titulo_descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="texto_descripcion" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto del descripción ') }}</label>

                        <div class="col-md-6">
                            <textarea name="texto_descripcion" style="width: 100%;" rows="4" class="form-control @error('texto_descripcion') is-invalid @enderror" required>{{$aprendizaje->texto_descripcion}}</textarea>

                            @error('texto_descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <h3 class="text-white">Metodología</h3>
                    <div class="form-group row">
                        <label for="titulo_metodologia" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del metodología ') }}</label>

                        <div class="col-md-6">
                            <textarea name="titulo_metodologia" style="width: 100%;" rows="4" class="form-control @error('titulo_metodologia') is-invalid @enderror" required>{{$aprendizaje->titulo_metodologia}}</textarea>

                            @error('titulo_metodologia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="texto_metodologia" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto del metodología ') }}</label>

                        <div class="col-md-6">
                            <textarea name="texto_metodologia" style="width: 100%;" rows="4" class="form-control @error('texto_metodologia') is-invalid @enderror" required>{{$aprendizaje->texto_metodologia}}</textarea>

                            @error('texto_metodologia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

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

@push('scripts')




@endpush

@endsection
