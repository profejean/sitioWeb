@extends('layouts.blog')

@section('blog')

<link href="{{asset('fullcalendar/main.css')}}" rel="stylesheet"/>
<script src="{{asset('fullcalendar/main.js')}}"></script>
<script src="{{asset('fullcalendar/locales-all-2.min.js')}}">
</script>
<div class="row" style="margin-bottom: 200px;"></div>  

<div class="container">
    <div id="calendar">
    </div>
    <input type="hidden" id="cantidad_evento" value="{{count($evento)}}">
    <?php $co = 1?>
    @foreach ($evento as $da)
    @include('calendario.modal')
    <?php $co = $co + 1?>
    @endforeach
</div>



@push('scripts')
 <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es',
            initialView: 'dayGridMonth',
            initialDate: new Date(),
            timeZone: 'America/Caracas',

            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay',

            },

            buttonText: {
              today:    'Hoy',
              month:    'Mes',
              week:     'Semana',
              day:      'Día'
              
            },


            events: [

      

              @foreach ($evento as $d)   

              {

                title: 'Evento: {{$d->resumen_titulo}}', 
                start: '{{$d->resumen_fecha}}',
                end: '{{$d->resumen_fecha_final}}',
                id: '{{$d->id}}',
                

                
              },     


              @endforeach    
            ],

            eventClick: function(info) {        

                $('#modal-'+info.event.id+'').modal('show') 
                        

                    // change the border color just for fun
                    info.el.style.borderColor = 'blue';

                },

               

            });
            calendar.render();
            });

    </script>
    
    <script type="text/javascript">
    


    var cantidad = $('#cantidad_evento').val();

    for (var i = 1; i <= cantidad; i++) {
       $('#hora_i_'+i).change(function(){ 
            var hora_i = $(this).val();
            var data = $(this).attr('data');
            var fecha_i = $('#fecha_i_'+data).val();
            
            $('#start_'+data).val(fecha_i +'T'+hora_i);
        });
        
    }


    </script>
@endpush

@endsection
