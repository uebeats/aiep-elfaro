<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header>
            @auth
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                        {{ __('Control Panel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articulos.create') }}">
                                    {{ __('+ Añadir noticia') }}
                                </a>
                            </li>
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Bienvenido, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @endauth
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-light">Nosotros</h4>
                            <p class="text-light">En El Faro, nos dedicamos al periodismo de calidad y a la
                                integridad informativa. Somos tu fuente confiable de noticias precisas y análisis
                                profundos,
                                comprometidos con iluminar la verdad en un mundo lleno de información.
                            </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-light">Contacto</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Síguenos en X</a></li>
                                <li><a href="#" class="text-white">Danos Like en Facebook</a></li>
                                <li><a href="mailto:elfaro@elfaro.com" class="text-white">Escríbenos un Email</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                        <svg width="23" viewBox="0 0 12 24" class="isotipo" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.56561 0L3.10432 1.14669V2.15157H3.43875V4.62954H2.9744V4.28334H2.53536V5.72554H3.17508L1.8595 21.4757H0V23.0188H11.1313V21.4757H9.27171L7.95613 5.72554H8.59586V4.28334H8.15675V4.62954H7.69247V2.15157H8.02689V1.14669L5.56561 0ZM3.82525 2.18638H7.30603V4.65932H3.82525V2.18638ZM6.4909 17.5536H7.89056V21.2976H6.4909V17.5536Z" />
                        </svg>
                        <span class="logotipo">El Faro</span>
                    </a>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-success ms-auto me-2">
                            {{ __('Iniciar Sesión') }}
                        </a>
                    @endguest
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
        <main class="py-5">
            @yield('content')
        </main>
        <footer class="py-4 bg-body-tertiary">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Información</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Términos y
                                    condiciones</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Políticas de
                                    privacidad</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Quiénes
                                    Somos</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Empresa</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Enlaces de interes</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tendencias</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Servicios</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">El Faro TV</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">El Faro
                                    Fotos</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">El Faro
                                    Autos</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Categorias</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Noticias</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Deportes</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Economia</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Legal</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">Tecnología</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Suscribete a nuestro boletín</h5>
                            <p>Nos comprometemos a no enviar SPAM a tu bandeja de entrada</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Correo Electrónico</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Correo Electrónico">
                                <button class="btn btn-primary" type="button">Suscribir</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
                    <p>© 2024 El Faro, Inc. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

    </div>
    <script>
        // Función para mostrar fecha y hora en tiempo real
        function mostrarFechaHora() {
            // Obtenemos la fecha actual
            var fecha = new Date();
            // Obtenemos el día
            var dia = fecha.getDate();
            // Si el día es menor que 10, le añadimos un 0
            if (dia < 10) {
                dia = "0" + dia;
            }
            // Obtenemos el mes
            var mes = fecha.getMonth() + 1;
            // Si el mes es menor que 10, le añadimos un 0
            if (mes < 10) {
                mes = "0" + mes;
            }
            // Obtenemos el año
            var year = fecha.getFullYear();
            // Obtenemos las horas
            var horas = fecha.getHours();
            // Si las horas son menores que 10, le añadimos un 0
            if (horas < 10) {
                horas = "0" + horas;
            }
            // Obtenemos los minutos
            var minutos = fecha.getMinutes();
            //
            if (minutos < 10) {
                minutos = "0" + minutos;
            }
            // Obtenemos los segundos
            var segundos = fecha.getSeconds();
            //
            if (segundos < 10) {
                segundos = "0" + segundos;
            }
            // Obtenemos el día de la semana
            var diaSemana = fecha.getDay();
            // Array con los días de la semana

            var semana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
            // Array con los meses del año
            var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre",
                "Noviembre", "Diciembre"
            ];
            // Mostramos la fecha
            document.getElementById("DiaSemana").textContent = semana[diaSemana];
            document.getElementById("Dia").textContent = dia;
            document.getElementById("Mes").textContent = meses[mes - 1];
            document.getElementById("Year").textContent = year;
            // Mostramos la hora
            document.getElementById("Horas").textContent = horas;
            document.getElementById("Minutos").textContent = minutos;
            document.getElementById("Segundos").textContent = segundos;
            // Actualizamos la fecha y hora
            setTimeout("mostrarFechaHora()", 1000);
        }
        // Ejectuamos la función
        mostrarFechaHora();
    </script>
</body>

</html>
