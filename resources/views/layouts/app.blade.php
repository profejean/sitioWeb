<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Conciencia Global</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: url({{asset("assets/img/nubes.jpg")}});">
    <div id="app">

        <nav class="navbar navbar-expand-lg" style="background: rgba(0,0,0,0.5);">
          <a class="navbar-brand text-white" href="#" style="font-size: 28px;font-family: 'Satisfy', sans-serif;">Conciencia Global</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-white" href="{{url('/')}}">Inicio <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/home')}}">Panel de control</a>
              </li>
              @if(Auth::check())
              <li class="nav-item">
                       
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link text-white">
                       
                    
                            Salir
                 
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              @endif
              
            </ul>
          </div>
        </nav>
        

        <main class="py-4 mb-5">

            @yield('content')
        </main>
    </div>
     <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    @stack('scripts')
</body>
</html>
