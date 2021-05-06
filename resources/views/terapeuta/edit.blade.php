@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('terapeuta_update',$terapeuta->slug)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Evento') }}</div>

                <div class="card-body">
                    
                 
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nombre ') }}</label>

                        <div class="col-md-6">
                            <textarea name="nombre" style="width: 100%;" rows="4" required class="form-control @error('nombre') is-invalid @enderror">{{!empty(old('nombre')) ? old('nombre') : $terapeuta->nombre}}</textarea>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="especialidad" class="col-md-4 col-form-label text-md-right text-white">{{ __('Especialidad ') }}</label>

                        <div class="col-md-6">
                            <textarea name="especialidad" style="width: 100%;" required rows="4" class="form-control @error('especialidad') is-invalid @enderror">{{!empty(old('especialidad')) ? old('especialidad') : $terapeuta->especialidad}}</textarea>

                            @error('especialidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('Correo ') }}</label>

                        <div class="col-md-6">
                            <input type="email" required name="email" value="{{!empty(old('email')) ? old('email') : $terapeuta->email}}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="tlf" class="col-md-4 col-form-label text-md-right text-white">{{ __('Teléfono ') }}</label>

                        <div class="col-md-6">
                            <input type="text" required name="tlf" value="{{!empty(old('tlf')) ? old('tlf') : $terapeuta->tlf}}">

                            @error('tlf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>            

                    
                    <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label text-md-right text-white">{{ __('Imagen') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="img" class="@error('img') is-invalid @enderror">

                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-auto justify-content-center">
                           <img src="{{asset('assets/img/terapeuta/'.$terapeuta->img)}}" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facebook" class="col-md-4 col-form-label text-md-right text-white">{{ __('Facebook ') }}</label>

                        <div class="col-md-6">
                            <textarea name="facebook" style="width: 100%;" rows="4" class="form-control @error('facebook') is-invalid @enderror">{{!empty(old('facebook')) ? old('facebook') : $terapeuta->facebook}}</textarea>

                            @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="linkedin" class="col-md-4 col-form-label text-md-right text-white">{{ __('Linkedin ') }}</label>

                        <div class="col-md-6">
                            <textarea name="linkedin" style="width: 100%;" rows="4" class="form-control @error('linkedin') is-invalid @enderror">{{!empty(old('linkedin')) ? old('linkedin') : $terapeuta->linkedin}}</textarea>

                            @error('linkedin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="twitter" class="col-md-4 col-form-label text-md-right text-white">{{ __('Twitter ') }}</label>

                        <div class="col-md-6">
                            <textarea name="twitter" style="width: 100%;" rows="4" class="form-control @error('twitter') is-invalid @enderror">{{!empty(old('twitter')) ? old('twitter') : $terapeuta->twitter}}</textarea>

                            @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instagram" class="col-md-4 col-form-label text-md-right text-white">{{ __('Instagram ') }}</label>

                        <div class="col-md-6">
                            <textarea name="instagram" style="width: 100%;" rows="4" class="form-control @error('instagram') is-invalid @enderror">{{!empty(old('instagram')) ? old('instagram') : $terapeuta->instagram}}</textarea>

                            @error('instagram')
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
