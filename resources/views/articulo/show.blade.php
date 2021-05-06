@extends('layouts.blog')

@section('blog')

<div style="width: 99%;">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('assets/img/gallery/'.$articulo->img)}}" alt="" style="height: 95vh;width: 100%">
        </div>
        <div class="col-6">
            <h2 class="mb-3" style="margin-top: 150px;text-align: center;">{{$articulo->titulo}}</h2>
            <p class="mb-3" style="text-align: justify; width:100%;">
                <i>{{$articulo->contenido_1}}</i>
            </p>
            <p class="mb-3" style="text-align: justify; width:100%;">
                {{$articulo->contenido_2}}
            </p>
            <p class="mb-3" style="text-align: justify; width:100%;">
                {{$articulo->contenido_3}}
            </p>
        </div>
       
    </div>

    <div class="row mt-3">
        
        <div class="col-6">
            
            <p class="mb-3 pl-4" style="text-align: justify; width:100%;">
                {{$articulo->contenido_4}}
            </p>
            <p class="mb-3 pl-4" style="text-align: justify; width:100%;">
                {{$articulo->contenido_5}}
            </p>
            <p class="mb-3 pl-4" style="text-align: justify; width:100%;">
                {{$articulo->contenido_6}}
            </p>
        </div>

        <div class="col-6">
            <img src="{{asset('assets/img/gallery/'.$articulo->img_2)}}" alt="" style="height: 95vh;width: 100%">
        </div>
       
    </div>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Comentarios del Artículo<span class="ml-3">{{$articulo->titulo}}</span></h2>
          <p>Recuerda comunicarte con respeto y tolerancia a las diferentes opiniones.</p>

          
        </div>

        

       

        @if(Auth::check())
        <div class="row justify-content-center">
           @if($errors->any())
          <h4 class="text-danger mt-5 mb-5">{{$errors->first()}}</h4>
          @endif
        </div>

        <form action="{{Route('comentarios')}}" method="post">
          @csrf
          
          <div class="form-row">
            <div class="col-10 form-group">
              <textarea class="form-control" name="comentario" rows="5" placeholder="Escribe tu comentario" style="width:100%;"></textarea>
         

              @error('comentario')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              
            </div>

            <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
         
            
          <div class="text-center"><button type="submit">Comentar</button></div>
         </div>
        </form>


        @else

        <h3 class="text-center mt-3 mb-3">Querido usuario debes iniciar sesión para comentar</h3>

        <div class="row justify-content-center">
           @if($errors->any())
          <h4 class="text-danger mt-5 mb-5">{{$errors->first()}}</h4>
          @endif
        </div>

        <form action="{{Route('iniciar_sesion')}}" method="post">
          @csrf
          <div class="form-row justify-content-center">
            <div class="col-lg-6 col-md-6 form-group">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required id="email" placeholder="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" required>

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

           
            
          <div class="text-center"><button type="submit" class="btn btn-warning">Iniciar Sesión</button></div>
          </div>
        </form>



        @endif

      </div>
    </section><!-- End Book A Table Section -->

    <section class="" style="background: #F0FFFF;">
      <h3 class="text-center">COMENTARIOS</h3>
      @if(count($comentario) > 0)
      @foreach($comentario as $c)
      <div class="row ml-5 justify-content-center">
      <div class="col-3">
        <img src="{{asset('assets/img/usuario_logo.png')}}" alt="" class="float-right mt-5" width="50" height="50">
      </div>
      <div class="col-6">
      <p class="mt-5">
        <div class="text-center mb-2">
          <span>{{$c->usuario}}</span> <span class="ml-5">{{$c->fecha}} - {{$c->hora}}</span>
        </div>       
         
        <span><i style="text-align: justify;">"{{$c->comentario}}"</i></span>

      </p>
      </div>
      <div class="col-3"></div>
      </div>
      @endforeach
      @else
      <p class="text-center mt-5">No hay Comentarios</p>
      @endif
      
      
    </section>



</div>             
@endsection
