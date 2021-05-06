@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('apoyo_update',$apoyo->slug)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Apoyo') }}</div>

                <div class="card-body">
                    
                 
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nombre ') }}</label>

                        <div class="col-md-6">
                            <textarea name="nombre" style="width: 100%;" rows="4" class="form-control @error('nombre') is-invalid @enderror" required>{{!empty(old('nombre')) ? old('nombre') : $apoyo->nombre}}</textarea>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-right text-white">{{ __('Descripción ') }}</label>

                        <div class="col-md-6">
                            <textarea name="descripcion" style="width: 100%;" rows="4" class="form-control @error('descripcion') is-invalid @enderror" required>{{!empty(old('descripcion')) ? old('descripcion') : $apoyo->descripcion}}</textarea>

                            @error('descripcion')
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
                           <img src="{{asset('assets/img/apoyo/'.$apoyo->img)}}" alt="" style="width: 100%;">
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
