@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('evento_store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Crear Evento') }}</div>

                <div class="card-body">
                    
                 
                    <div class="form-group row">
                        <label for="resumen_titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del evento ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen_titulo" style="width: 100%;" rows="4" class="form-control @error('resumen_titulo') is-invalid @enderror" required>{{old('resumen_titulo')}}</textarea>

                            @error('resumen_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ubicacion" class="col-md-4 col-form-label text-md-right text-white">{{ __('Ubicación del evento ') }}</label>

                        <div class="col-md-6">
                            <textarea name="ubicacion" style="width: 100%;" rows="4" class="form-control @error('ubicacion') is-invalid @enderror" required>{{old('ubicacion')}}</textarea>

                            @error('ubicacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-right text-white">{{ __('Descripción del evento ') }}</label>

                        <div class="col-md-6">
                            <textarea name="descripcion" style="width: 100%;" rows="4" class="form-control @error('descripcion') is-invalid @enderror" required>{{old('descripcion')}}</textarea>

                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="resumen_titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo del evento ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen_titulo" style="width: 100%;" rows="4" class="form-control @error('resumen_titulo') is-invalid @enderror" required>{{old('resumen_titulo')}}</textarea>

                            @error('resumen_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_texto_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto 1 ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen_texto_1" style="width: 100%;" rows="4" class="form-control @error('resumen_texto_1') is-invalid @enderror" required>{{old('resumen_texto_1')}}</textarea>

                            @error('resumen_texto_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_texto_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto 2 ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen_texto_2" style="width: 100%;" rows="4" class="form-control @error('resumen_texto_2') is-invalid @enderror" required>{{old('resumen_texto_2')}}</textarea>

                            @error('resumen_texto_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_texto_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto 3 ') }}</label>

                        <div class="col-md-6">
                            <textarea name="resumen_texto_3" style="width: 100%;" rows="4" class="form-control @error('resumen_texto_3') is-invalid @enderror" required>{{old('resumen_texto_3')}}</textarea>

                            @error('resumen_texto_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_fecha" class="col-md-4 col-form-label text-md-right text-white">{{ __('Fecha Inicial') }}</label>

                        <div class="col-md-6">
                            <input type="date" value="{{old('resumen_fecha')}}" name="resumen_fecha" class="form-control @error('resumen_fecha') is-invalid @enderror" required>

                            @error('resumen_fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_fecha_final" class="col-md-4 col-form-label text-md-right text-white">{{ __('Fecha Final') }}</label>

                        <div class="col-md-6">
                            <input type="date" value="{{old('resumen_fecha_final')}}" name="resumen_fecha_final" class="form-control @error('resumen_fecha_final') is-invalid @enderror" required>

                            @error('resumen_fecha_final')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_hora_ini" class="col-md-4 col-form-label text-md-right text-white">{{ __('Hora de Inicio ') }}</label>

                        <div class="col-md-6">
                            <input type="time" value="{{old('resumen_hora_ini')}}" name="resumen_hora_ini" class="form-control @error('resumen_hora_ini') is-invalid @enderror" required>

                            @error('resumen_hora_ini')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="resumen_img" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen del evento') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="resumen_img" class="@error('resumen_img') is-invalid @enderror" required>

                            @error('resumen_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pdf" class="col-md-4 col-form-label text-md-right text-white">{{ __('PDF del evento') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="pdf" class="@error('pdf') is-invalid @enderror" required>

                            @error('pdf')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="video" class="col-md-4 col-form-label text-md-right text-white">{{ __('Video del evento') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="video" class="@error('video') is-invalid @enderror" required>

                            @error('video')
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
