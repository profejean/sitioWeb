@extends('layouts.blog')

@section('blog')

    <section id="chefs" class="chefs" style='background: url({{asset('assets/img/fondo_t.jpg')}}) center center no-repeat;
    background-size: cover;
    padding: 60px 0;
    position: relative;'>
      <div class="container">

        <div class="section-title" style="margin-top: 80px;">
          <h2>Orientación Personal<span>Terapeutas</span></h2>
          <p>Nuestro profesionales estarán listo para ayudarles cuando lo necesite.</p>
        </div>

        <div class="row">

          @foreach($terapeuta as $o)

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/terapeuta/'.$o->img)}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$o->nombre}}</h4>
                <span>{{$o->especialidad}}</span>
                <span>{{$o->email}}</span>
                <span>{{$o->tlf}}</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          @endforeach


        </div>

      </div>
    </section>



    <section id="chefs2" class="chefs" style='background: url({{asset('assets/img/fondo_t.jpg')}}) center center no-repeat;
    background-size: cover;
    padding: 60px 0;
    position: relative;'>
      <div class="container">

        <div class="section-title" style="margin-top: 80px;">
          <h2>Orientación Personal<span>Tipos de Apoyo</span></h2>
          <p>Diferentes tipo de apoyo para mejorar en grupo e individualmente.</p>
        </div>

        <div class="row">

          @foreach($apoyo as $t)

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/apoyo/'.$t->img)}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$t->nombre}}</h4>
                <span>{{$t->descripcion}}</span>   
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>            
                
              </div>
            </div>
          </div>

          @endforeach


        </div>

      </div>
    </section>

    @push('scripts')
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @endpush

@endsection
