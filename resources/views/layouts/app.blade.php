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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Paytone+One&display=swap" rel="stylesheet">
    <!-- Libreria de iconos de FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />   
    <!-- Hoja de estilos css  -->
    <link href="{{ asset('css\styles.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg nav-langosta">  
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img\logo_langosta.png') }}" alt="" width="35" height="35" class="d-inline-block align-text-top">
                    Langosta.School
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-eye-fill"></i> Vistas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/admin"><i class="bi bi-house"></i> Inicio</a></li>
                                    <li><a class="dropdown-item" href="/students"><i class="bi bi-mortarboard-fill"></i> Alumnos</a></li>
                                    <li><a class="dropdown-item" href="/teachers"><i class="bi bi-briefcase-fill"></i> Profesores</a></li>
                                    <li><a class="dropdown-item" href="/courses"><i class="bi bi-clipboard-check"></i> Cursos</a></li>
                                    <li><a class="dropdown-item" href="/enrollments"><i class="bi bi-journal-text"></i> Matrículas</a></li>
                                    <li><a class="dropdown-item" href="/schedules"><i class="bi bi-alarm-fill"></i> Horarios</a></li>
                                    <li><a class="dropdown-item" href="/classes"><i class="bi bi-easel"></i> Clases</a></li>                            
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-file-person"></i> Mi perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-arrow-bar-left"></i>
                                        {{ __('Cerrar sesión') }}
                                    </a></li>
                                </ul>


                                    
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
</body>

<!-- Footer -->
<footer class="text-center text-white fixed-bottom footer-langosta">
    <!-- Copyright -->
    <div class="text-center p-3">© 2022 Langosta.school</div>
    <!-- Copyright -->
</footer>

</html>
