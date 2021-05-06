<div aria-hidden="true" class="modal fade modal-slide-in-right" id="modal-{{$da->id}}" role="dialog" tabindex="-1">
    
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Evento: {{$da->resumen_titulo}}
                </h4>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">

                <h3 class="mt-2">Nombre del Evento : {{$da->resumen_titulo}}</h3>
                <h3 class="mt-2">Fecha de Inicio : {{$da->resumen_fecha}}</h3>
                <h3 class="mt-2">Fecha de culminación : {{$da->resumen_fecha_final}}</h3>
                <h3 class="mt-2">Hora de Inicio : {{$da->resumen_hora_ini}}</h3>
                <h3 class="mt-2">Ubicación : {{$da->ubicacion}}</h3>
                <p class="mt-2">Descripción : {{$da->descripcion}}</p>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Cerrar
                </button>
             
            </div>
        </div>
    </div>
 
</div>

