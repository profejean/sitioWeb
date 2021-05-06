<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Conciencia Global</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="{{asset('assets/img/favicon.png')}}" rel="icon"> --}}
  {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}


  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">


  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  @stack('css')

  
  
</head>

<body>

  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent" style="background: rgba(0,0,0,0.5);">
    <div class="container text-right">
      @if($inicio->info == 'Si')
      <i class="icofont-phone"></i> {{$inicio->tlf}}
      <i class="icofont-clock-time icofont-rotate-180"></i> {{$inicio->dias_trabajo}}: {{$inicio->apertura}} - {{$inicio->cierre}}
      @endif
      @if(!Auth::check())
      <i><a href="{{url('login')}}" class="btn btn-warning">Login</a></i>
      @endif

        <i class="text-center"><a href="#book-a-table" class="btn btn-warning">Suscripciones</a></i>
        @if(Auth::check())
        <i class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-danger">
           
        
                Salir
     
        </a>
        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
            @csrf
        </form></i>
        @endif

    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: rgba(0,0,0,0.5);">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{url('/')}}"><span>Conciencia Global</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Inicio</a></li>
          
          <li><a href="{{url('calendario')}}">Calendario</a></li>
          <li><a href="{{url('recurso')}}">Recursos</a></li>
          <li><a href="{{url('orientacion')}}">Orientación</a></li>
         
          
        </ul>
      </nav>
    </div>
  </header>

  @yield('blog')

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>CONCIENCIA GLOBAL</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Conciencia Global</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://transformacioneducativa.net/">Transformacion Educativa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @stack('scripts')


</body>

</html>
