@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{Route('inicio_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
    
    
    <div class="row justify-content-center mt-5">
        <div class="col-auto p-5">
        <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Editar Carrusel') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="info" class="col-md-4 col-form-label text-md-right text-white">{{ __('Mostrar información') }}</label>

                        <div class="col-md-6">
                            <select name="info" class="form-control">
                                @if(!empty(old('info')))
                                    <option value="{{old('info')}}">{{old('info')}}</option>
                                @elseif(!empty($inicio->info))
                                    <option value="{{$inicio->info}}">{{$inicio->info}}</option>
                                @endif
                                @if($inicio->info != 'Si')
                                    <option value="Si">Si</option>
                                @endif
                                @if($inicio->info != 'No')
                                    <option value="No">No</option>
                                @endif
                                
                            </select>

                            @error('info')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tlf" class="col-md-4 col-form-label text-md-right text-white">{{ __('Teléfono ') }}</label>

                        <div class="col-md-6">
                            <input id="tlf" type="text" class="form-control @error('tlf') is-invalid @enderror" name="tlf" value="{{ !empty(old('tlf')) ? old('tlf') : (!empty($inicio['tlf']) ? $inicio['tlf'] : '+1 567 562 ') }}" autofocus>

                            @error('tlf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dias_trabajo" class="col-md-4 col-form-label text-md-right text-white">{{ __('Dias de trabajo ') }}</label>

                        <div class="col-md-6">
                            <input id="dias_trabajo" type="text" class="form-control @error('dias_trabajo') is-invalid @enderror" name="dias_trabajo" value="{{ !empty(old('dias_trabajo')) ? old('dias_trabajo') : (!empty($inicio['dias_trabajo']) ? $inicio['dias_trabajo'] : '+1 567 562 ') }}" autofocus>

                            @error('dias_trabajo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apertura" class="col-md-4 col-form-label text-md-right text-white">{{ __('Dias de trabajo ') }}</label>

                        <div class="col-md-6">
                            <input id="apertura" type="text" class="form-control @error('apertura') is-invalid @enderror" name="apertura" value="{{ !empty(old('apertura')) ? old('apertura') : (!empty($inicio['apertura']) ? $inicio['apertura'] : '+1 567 562 ') }}" autofocus>

                            @error('apertura')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cierre" class="col-md-4 col-form-label text-md-right text-white">{{ __('Dias de trabajo ') }}</label>

                        <div class="col-md-6">
                            <input id="cierre" type="text" class="form-control @error('cierre') is-invalid @enderror" name="cierre" value="{{ !empty(old('cierre')) ? old('cierre') : (!empty($inicio['cierre']) ? $inicio['cierre'] : '+1 567 562 ') }}" autofocus>

                            @error('cierre')
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

@endsection
