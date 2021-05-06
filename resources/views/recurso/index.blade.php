@extends('layouts.blog')

@section('blog')

@push('css')
<style type="text/css">
      .pildora {
        background: url({{asset('assets/img/'.$pildora->img)}}) no-repeat center;
        background-size: cover;
        min-height: 100vh;
      }
    
  </style>
@endpush


  <section id="hero">
    <div class="hero-container">
      <div class="pildora"></div>

 
      

      </div>
    </div>
  </section>

  <main id="main">

     <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Artículos de Interes</h2>
          <p>Puedes revisar nuestros artículos y comentar, forma parte de nuestra comunidad conectate con tu conciencia global.</p>
        </div>

        <div class="row no-gutters">

          @foreach($articulo as $a)

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{url('articulo_show/'.$a->slug)}}"  data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/'.$a->img)}}" alt="" class="img-fluid">
              </a>

              <div class="row justify-content-center mt-5">
                <a href="{{url('articulo_show/'.$a->slug)}}" class="btn btn-warning" style="margin-bottom:10px;">Ver Articulo</a>
              </div>

              <h3 class="text-center mt-3 mb-3">{{$a->titulo}}</h3>
              <p class="mt-3 mb-3 pl-2 pr-2" style="text-align: justify;"><i>{{$a->resumen}}</i></p>

              

              
            </div>
          </div>

          @endforeach

          

        </div>

      </div>
    </section><!-- End Gallery Section -->
  </main><!-- End #main -->

  
@endsection
