@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('identidad_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Identidad') }}</div>

                <div class="card-body">
                    
                    <h3 class="text-white">Misión</h3>
                    <div class="form-group row">
                        <label for="mision_titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo de la Misión ') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_titulo" style="width: 100%;" rows="4" required class="form-control @error('mision_titulo') is-invalid @enderror" {{!empty(old('titulo')) ? old('titulo') : $articulo->titulo}}>{{$us->mision_titulo}}</textarea>

                            @error('mision_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mision_texto_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Misión 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_texto_1" style="width: 100%;" rows="4" required class="form-control @error('mision_texto_1') is-invalid @enderror">{{$us->mision_texto_1}}</textarea>

                            @error('mision_texto_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mision_texto_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Misión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_texto_2" style="width: 100%;" required rows="4" class="form-control @error('mision_texto_2') is-invalid @enderror">{{$us->mision_texto_2}}</textarea>

                            @error('mision_texto_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="mision_texto_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Misión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_texto_3" style="width: 100%;" required rows="4" class="form-control @error('mision_texto_3') is-invalid @enderror">{{$us->mision_texto_3}}</textarea>

                            @error('mision_texto_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mision_imagen" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen Misión') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="mision_imagen">

                            @error('mision_imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-auto justify-content-center">
                           <img src="{{asset('assets/img/'.$us->mision_imagen)}}" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cantidad_check_mision" class="col-md-4 col-form-label text-md-right text-white">{{ __('Cantidad de check de Misión') }}</label>

                        <div class="col-md-6">
                            <select name="cantidad_check_mision" class="form-control" id="cantidad_check_mision" onchange="cantidadCheckMision()">
                                @if(!empty(old('cantidad_check_mision')))
                                    <option value="{{old('cantidad_check_mision')}}">{{old('cantidad_check_mision')}}</option>
                                @elseif(!empty($us->cantidad_check_mision))
                                    <option value="{{$us->cantidad_check_mision}}">{{$us->cantidad_check_mision}}</option>
                                @endif
                                <?php for ($i=1; $i <= 3; $i++) { ?>
                                @if($us->cantidad_check_mision != $i)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif
                                <?php } ?>
                                
                                
                            </select>

                            @error('cantidad_check_mision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="mision_check_1">
                        <label for="mision_check_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Misión 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_check_1" style="width: 100%;" rows="4" class="form-control mision_check_1 @error('mision_check_1') is-invalid @enderror">{{$us->mision_check_1}}</textarea>

                            @error('mision_check_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="mision_check_2">
                        <label for="mision_check_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Misión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_check_2" style="width: 100%;" rows="4" class="form-control @error('mision_check_2') is-invalid @enderror">{{$us->mision_check_2}}</textarea>

                            @error('mision_check_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="mision_check_3">
                        <label for="mision_check_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Misión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="mision_check_3" style="width: 100%;" rows="4" class="form-control @error('mision_check_3') is-invalid @enderror">{{$us->mision_check_3}}</textarea>

                            @error('mision_check_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h3 class="text-white">Visión</h3>
                    <div class="form-group row">
                        <label for="vision_titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo de la Visión ') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_titulo" style="width: 100%;" rows="4" class="form-control @error('vision_titulo') is-invalid @enderror">{{$us->vision_titulo}}</textarea>

                            @error('vision_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vision_texto_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Visión 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_texto_1" style="width: 100%;" rows="4" class="form-control @error('vision_texto_1') is-invalid @enderror">{{$us->vision_texto_1}}</textarea>

                            @error('vision_texto_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vision_texto_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Visión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_texto_2" style="width: 100%;" rows="4" class="form-control @error('vision_texto_2') is-invalid @enderror">{{$us->vision_texto_2}}</textarea>

                            @error('vision_texto_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="vision_texto_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Visión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_texto_3" style="width: 100%;" rows="4" class="form-control @error('vision_texto_3') is-invalid @enderror">{{$us->vision_texto_3}}</textarea>

                            @error('vision_texto_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vision_imagen" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen Visión') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="vision_imagen">

                            @error('vision_imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-auto justify-content-center">
                           <img src="{{asset('assets/img/'.$us->vision_imagen)}}" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cantidad_check_vision" class="col-md-4 col-form-label text-md-right text-white">{{ __('Cantidad de check de Visión') }}</label>

                        <div class="col-md-6">
                            <select name="cantidad_check_vision" class="form-control" id="cantidad_check_vision" onchange="cantidadCheckVision()">
                                @if(!empty(old('cantidad_check_vision')))
                                    <option value="{{old('cantidad_check_vision')}}">{{old('cantidad_check_vision')}}</option>
                                @elseif(!empty($us->cantidad_check_vision))
                                    <option value="{{$us->cantidad_check_vision}}">{{$us->cantidad_check_vision}}</option>
                                @endif
                                <?php for ($i=1; $i <= 3; $i++) { ?>
                                @if($us->cantidad_check_vision != $i)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif
                                <?php } ?>
                                
                                
                            </select>

                            @error('cantidad_check_vision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="vision_check_1">
                        <label for="vision_check_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Visión 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_check_1" style="width: 100%;" rows="4" class="form-control vision_check_1 @error('vision_check_1') is-invalid @enderror">{{$us->vision_check_1}}</textarea>

                            @error('vision_check_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="vision_check_2">
                        <label for="vision_check_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Misión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_check_2" style="width: 100%;" rows="4" class="form-control @error('vision_check_2') is-invalid @enderror">{{$us->vision_check_2}}</textarea>

                            @error('vision_check_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="vision_check_3">
                        <label for="vision_check_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Visión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="vision_check_3" style="width: 100%;" rows="4" class="form-control @error('vision_check_3') is-invalid @enderror">{{$us->vision_check_3}}</textarea>

                            @error('vision_check_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h3 class="text-white">Objetivo</h3>

                    <div class="form-group row">
                        <label for="objetivo_titulo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Titulo de la Objetivo ') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_titulo" style="width: 100%;" rows="4" class="form-control @error('objetivo_titulo') is-invalid @enderror">{{$us->objetivo_titulo}}</textarea>

                            @error('objetivo_titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="objetivo_texto_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Objetivo 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_texto_1" style="width: 100%;" rows="4" class="form-control @error('objetivo_texto_1') is-invalid @enderror">{{$us->objetivo_texto_1}}</textarea>

                            @error('objetivo_texto_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="objetivo_texto_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Visión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_texto_2" style="width: 100%;" rows="4" class="form-control @error('objetivo_texto_2') is-invalid @enderror">{{$us->objetivo_texto_2}}</textarea>

                            @error('objetivo_texto_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="objetivo_texto_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Texto de la Visión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_texto_3" style="width: 100%;" rows="4" class="form-control @error('objetivo_texto_3') is-invalid @enderror">{{$us->objetivo_texto_3}}</textarea>

                            @error('objetivo_texto_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="objetivo_imagen" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen Visión') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="objetivo_imagen">

                            @error('objetivo_imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-auto justify-content-center">
                           <img src="{{asset('assets/img/'.$us->objetivo_imagen)}}" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cantidad_check_objetivo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Cantidad de check de Objetivo') }}</label>

                        <div class="col-md-6">
                            <select name="cantidad_check_objetivo" class="form-control" id="cantidad_check_objetivo" onchange="cantidadCheckObjetivo()">
                                @if(!empty(old('cantidad_check_objetivo')))
                                    <option value="{{old('cantidad_check_objetivo')}}">{{old('cantidad_check_objetivo')}}</option>
                                @elseif(!empty($us->cantidad_check_objetivo))
                                    <option value="{{$us->cantidad_check_objetivo}}">{{$us->cantidad_check_objetivo}}</option>
                                @endif
                                <?php for ($i=1; $i <= 3; $i++) { ?>
                                @if($us->cantidad_check_objetivo != $i)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif
                                <?php } ?>
                                
                                
                            </select>

                            @error('cantidad_check_objetivo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="objetivo_check_1">
                        <label for="objetivo_check_1" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Visión 1') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_check_1" style="width: 100%;" rows="4" class="form-control objetivo_check_1 @error('objetivo_check_1') is-invalid @enderror">{{$us->objetivo_check_1}}</textarea>

                            @error('objetivo_check_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="objetivo_check_2">
                        <label for="objetivo_check_2" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Misión 2') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_check_2" style="width: 100%;" rows="4" class="form-control @error('objetivo_check_2') is-invalid @enderror">{{$us->objetivo_check_2}}</textarea>

                            @error('objetivo_check_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="visibility: hidden;" id="objetivo_check_3">
                        <label for="objetivo_check_3" class="col-md-4 col-form-label text-md-right text-white">{{ __('Check Visión 3') }}</label>

                        <div class="col-md-6">
                            <textarea name="objetivo_check_3" style="width: 100%;" rows="4" class="form-control @error('objetivo_check_3') is-invalid @enderror">{{$us->objetivo_check_3}}</textarea>

                            @error('objetivo_check_3')
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



<script src="{{asset('js/identidad.js')}}"></script>
@endpush

@endsection
