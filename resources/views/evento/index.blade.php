@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12 p-5">
            <div class="card" style="background: rgba(0,0,0,0.5);">
                <div class="card-header text-center text-white" style="font-size: 23px;">{{ __('EVENTOS') }}

                    <a class="text-white float-right" href="{{route('evento_create')}}">Crear Evento</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-condensed table-hover text-white text-center" style="font-size: 23px;">
                        <tr>
                            <td>ID</td>
                            <td>TITULO</td>
                            <td>FECHA</td>
                            <td>HORA</td>
                            <td colspan="2">OPCIONES</td>
                            
                        </tr>

                        @foreach($evento as $e)
                        <tr>
                            <td>{{$e->id}}</td>
                            <td>{{$e->resumen_titulo}}</td>
                            <td>{{$e->resumen_fecha}}</td>
                            <td>{{$e->resumen_hora_ini}}</td>
                            <td style="border-right: none; ">
                                <a class="btn btn-warning text-dark" href="{{route('evento_edit',[$e->slug])}}">Editar</a>
                                
                                
                                
                            </td>
                            <td style="border-left: none; ">
                                <form action="{{ route('evento_borrar', $e->id) }}"  method="post" id="enviar_{{$e->id}}">        
                                @csrf
                                @method('post')
                                
                                <a class="btn btn-danger" data-target="#modal-delete-{{$e->id}}" data-toggle="modal" data-backdrop="false">
                                  Eliminar
                                </a>
                                </form>
                            </td>
                            
                        </tr>
                        @include('evento.modal')
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
  
    </div>
</div>   

@push('scripts')
<script>
    function eliminar(e){

        $('#enviar_'+e).submit();
    }
</script>
@endpush          
@endsection
