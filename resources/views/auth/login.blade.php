@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8 p-5">
            <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-auto">
                            <a href="{{url('register')}}" class="btn btn-primary" style="background: rgba(0,0,0,0.5)"> 
                                {{ __('Registrarse') }}
                           </a>

                            
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary" style="background: rgba(0,0,0,0.5)">
                                    {{ __('Entrar') }}
                                </button>

                                
                            </div>
                            
                        </div>

                        <div class="row mt-2 justify-content-center">

                            <div class="">
                                <a href="{{url('/')}}" class="btn btn-primary" style="background: rgba(0,0,0,0.5)">Inicio</a>
                            </div>
                        </div>


                    </form>

                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
