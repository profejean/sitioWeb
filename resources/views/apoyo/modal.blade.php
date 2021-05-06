<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$e->id}}">

 
           
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">¿Eliminar el apoyo?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">x</span>
                  
                </button>
              </div>

              <div class="modal-body">
                <p>Confirme si desea eliminar el apoyo {{$e->id}}</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>

                <button onclick="eliminar({{$e->id}})" class="btn btn-danger">Confirmar</button>


              </div>
            </div>
           </div>
     

  
</div>
