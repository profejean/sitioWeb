@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('articulo_store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Crear Articulo') }}</div>

                <div class="card-body">
                    
                 
                    <div class="form-group row">
                        <label for="titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del articulo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="titulo" style="width: 100%;" rows="4" class="form-control @error('titulo') is-invalid @enderror" required>{{old('titulo')}}</textarea>

                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen" class="col-md-4 col-form-label text-md-right text-white">{{ __('Resumen del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen" style="width: 100%;" rows="4" class="form-control @error('resumen') is-invalid @enderror" required>{{old('resumen')}}</textarea>

                            @error('resumen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 1 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_1" style="width: 100%;" rows="4" class="form-control @error('contenido_1') is-invalid @enderror" required>{{old('contenido_1')}}</textarea>

                            @error('contenido_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 2 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_2" style="width: 100%;" rows="4" class="form-control @error('contenido_2') is-invalid @enderror" required>{{old('contenido_2')}}</textarea>

                            @error('contenido_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 3 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_3" style="width: 100%;" rows="4" class="form-control @error('contenido_3') is-invalid @enderror" required>{{old('contenido_3')}}</textarea>

                            @error('contenido_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_4" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 4 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_4" style="width: 100%;" rows="4" class="form-control @error('contenido_4') is-invalid @enderror" required>{{old('contenido_4')}}</textarea>

                            @error('contenido_4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_5" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 5 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_5" style="width: 100%;" rows="4" class="form-control @error('contenido_5') is-invalid @enderror" required>{{old('contenido_5')}}</textarea>

                            @error('contenido_5')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contenido_6" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contenido 6 del artículo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="contenido_6" style="width: 100%;" rows="4" class="form-control @error('contenido_6') is-invalid @enderror" required>{{old('contenido_6')}}</textarea>

                            @error('contenido_6')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="img" class="@error('img') is-invalid @enderror" required>

                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                   

                    <div class="form-group row">
                        <label for="img_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen 2') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="img_2" class="@error('img_2') is-invalid @enderror" required>

                            @error('img_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
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
