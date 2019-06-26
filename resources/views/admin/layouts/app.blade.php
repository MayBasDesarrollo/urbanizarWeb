<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Urbanizar </title>
    <meta name="description" content="Admin - Urbanizar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/admin/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li  @if ($vista == "Home") class="active" @endif>
                        <a href="{{ route('AdminHome') }}">
                            <i class="menu-icon fa fa-laptop"></i>Home
                        </a>
                    </li>
                    <li class="menu-title">Configuraciones</li>
                    <li  @if ($vista == "Usuarios") class="active" @endif>
                        <a href="{{ route('users.index') }}"> 
                            <i class="menu-icon fa fa-id-card-alt"></i>Usuarios 
                        </a>
                    </li>
                    <li  @if ($vista == "Propiedades") class="active" @endif>
                        <a href="{{ route('AdminHome') }}">
                            <i class="menu-icon fas fa-city"></i>Propiedades 
                        </a>
                    </li>
                    </li>
                    <li  @if ($vista == "Carrusel de Fotos") class="active" @endif>
                        <a href="{{ route('AdminHome') }}">
                            <i class="menu-icon fa fa-images"></i>Carrusel de Fotos 
                        </a>
                    </li>
                    </li>
                    <li class="menu-title">Mensajes</li>
                    <li @if ($vista == "Bandeja de Mensajes") class="active" @endif>
                        <a href="{{ route('AdminHome') }}"> 
                            <i class="menu-icon fas fa-inbox"></i>Bandeja de Mensajes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('AdminHome') }}">
                        <i class="fas fa-house-damage" style="padding-bottom: 10px;color:#3d5afe"></i> Admin-Urbanizar
                    </a>
                    <a class="navbar-brand hidden" href="{{ route('AdminHome') }}">
                            <i class="fas fa-house-damage" style="padding-bottom: 10px;color:#3d5afe"></i>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{--  {{ Auth::user()->name }}   --}} Mayerlin Bastidas
                            <img class="user-avatar rounded-circle" src="{{ asset('img/propiedades-alquiler.png') }}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href=""
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{--  {{ __('Logout') }}  --}}Salir
                            </a>
                            <form id="logout-form" action="" method="POST" style="display: none;">
                                @csrf
                            </form>
                            {{--  <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Salir</a>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <div class="clearfix"></div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/general.js') }}"></script>
    @yield('script')
</body>
</html>
