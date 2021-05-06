@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center mt-5">
        <div class="card ml-3 mt-5" style="width: 18rem; background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Inicio</h5>
            <p class="card-text text-white">Información general de la empresa</p>
            <a href="{{url('inicio_edit')}}" class="text-white btn btn-primary">Editar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Carrusel</h5>
            <p class="card-text text-white">Cargar imagenes del carrusel y su contenido</p>
            <a href="{{url('carrusel_editar')}}" class="text-white btn btn-primary">Editar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Identidad</h5>
            <p class="card-text text-white">Cargar contenido de la identidad corporativa</p>
            <a href="{{url('identidad_edit')}}" class="text-white btn btn-primary">Editar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Aprendizaje</h5>
            <p class="card-text text-white">Cargar contenido de la enseñanza / aprendizaje</p>
            <a href="{{url('aprendizaje_edit')}}" class="text-white btn btn-primary">Editar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Pildora</h5>
            <p class="card-text text-white">Cargar imagen de la pildora</p>
            <a href="{{url('pildora_edit')}}" class="text-white btn btn-primary">Editar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Eventos</h5>
            <p class="card-text text-white">Administración de eventos</p>
            <a href="{{url('evento')}}" class="text-white btn btn-primary">Consultar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Terapeutas</h5>
            <p class="card-text text-white">lista de terapeutas</p>
            <a href="{{url('terapeuta')}}" class="text-white btn btn-primary">Consultar</a>
          </div>
        </div>

        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Apoyo</h5>
            <p class="card-text text-white">lista de los tipos de apoyo</p>
            <a href="{{url('apoyo')}}" class="text-white btn btn-primary">Consultar</a>
          </div>
        </div>
        <div class="card ml-3 mt-5" style="width: 18rem;background: rgba(0,0,0,0.5);">
          
          <div class="card-body">
            <h5 class="card-title text-white">Aliado</h5>
            <p class="card-text text-white">lista de los aliados</p>
            <a href="{{url('aliado')}}" class="text-white btn btn-primary">Consultar</a>
          </div>
        </div>
        
        
        
    </div>
</div>
@endsection
