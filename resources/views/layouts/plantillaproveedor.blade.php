<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleOriginal.css?3.6')}}" rel="stylesheet">
    <link href="{{ asset('css/css/all.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    


</head>
<body>

    
    <div class="headers">
        @forelse ($logos as $logo)
            <center>
            <img src="{{asset('storage').'/'.$logo->nombre}}" width="100%" alt="Huejutla">
            </center>
        @empty
            
        @endforelse
    </div>

    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0B0B3B;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            <label class="Tit-P" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;">Menú</label>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-auto ml-auto">
                <div class="navegadors">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique ;font-size: large;" href="{{ url('/Proveedor') }}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; ;font-size: large;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Local
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('local.locales')}}">Listado de Locales</a>
                                <a class="dropdown-item" href={{route('local.index')}}>Añadir nuevo</a>
                            </div>
                        </li>

                        

                        <!-- Authentication Links -->

                        <li class="nav-item">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; font-size: large;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white; font-family:Latin Modern Roman 10; font-style: oblique; font-size: large;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{ asset(Auth::user()->profile_image) }}" class="rounded-circle" width="30"  height="30">
                                       
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{url('/profileProveedor')}}">Configuracion Perfil</a>
                                        

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>
   
    @yield('breadcrumbs')
    @yield('carrusel')   
    @yield('content1')
    @yield('content')
    @yield('js')
    
    
    <script src="{{asset('js/ocultar.js')}}"></script>
    
    
    
</body>

    <footer class="footer1">
        @foreach ($pies as $pie) 
                <div class="container-footer-all">
            
                    <div class="container-body">

                        <div class="footer-colum-1">
                            <div class="colum2" >
    
                                <div class="seguir">
                                    <div class="logo">
                                        <img class="imagen" src="{{asset('storage').'/'.$pie->Logo}}" alt="" >
                                    </div>
                                </div>
                                
        
                                <div class="seguir">
                                    <div class="row" >
                                        <ul class="footer_box">
                                            <center>
                                                <li><a class=".pla-p">Comparte</a></li>
                                            </center>
                                        </ul>
                                    </div>
                                </div>
        
                                <div class="seguir">
                                    
                                    <ul class="social">	
                                      <li class="facebook"><a href="{{$pie->Facebook}}"><span> </span></a></li>
                                      <li class="twitter"><a href="{{$pie->Twitter}}"><span> </span></a></li>
                                      <li class="instagram"><a href="{{$pie->Instagram}}"><span> </span></a></li>	
                                                                                            
                                    </ul>
                                </div>
                                <div class="seguir">
                                    <div class="row">
                                        <ul class="footer_box">
                                            <center>
                                                <li><a class=".pla-p">Siguenos</a></li>
                                            </center>
                                        </ul>
                                    </div>
                                </div>
        
                            </div>
                        </div>
    
                        <div class="footer-colum-1">
                            <div class="colum3">
                                <ul  class="footer_box">
                                    <h4>Informacion</h4>
                                    <li><a  href="#">Nosotros</a></li>
                                    {{-- <li><a class=".pla-p">{{$pie->Nosotros}}</a></li> --}}
                                    <li><a href="#">Directorio</a></li>
                                    <li><a class=".pla-p">{{$pie->Directorio}}</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="footer-colum-1">
                            <div class="colum3">
    
                                <ul class="footer_box">
                                    <h4>Contacto</h4>
                                    <div class="row2">
                                        <i class="icono fas fa-map-marker-alt"></i>
                                        
                                        <li><a class=".pla-p">{{isset($pie->Ubicacion)?$pie->Ubicacion:''}}</a></li>
                                    </div>
        
                                    <div class="row2">
                                        <i class="icono fas fa-phone-alt"></i>
                                        <li><a class=".pla-p" >{{$pie->Telefono}}</a></li>
                                    </div>
        
                                    <div class="row2">
                                        <i class="icono fas fa-envelope"></i>
                                        <li><a class=".pla-p">{{$pie->Correo}}</a></li>
                                    </div>
                                </ul>
        
                            </div>
                        </div>


                    </div>
                    <div class="container-footer">
                        <div class="copyright">
                            <div class="informacion">
                                Copyright 2021-2022 | <a href=""></a>Privacion y Politica</a>|<a href="">Terminos y Condiciones</a>
                            </div>
                        </div>

                    </div>
                </div>

        @endforeach
    </footer>

   

</html>
