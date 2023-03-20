<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
        <title>Residencia</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md" style="background: #851e39;">
            <div class="container-fluid"><a class="navbar-brand" href="{{ route('home') }}" style="color: rgb(239,228,156);">Distribuidora ANDASO</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                </button>
                <div id="navcol-1" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="">Nuestros Productos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="#">! Forma parte de nuestra comunidad !</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="#">Eres Socio?</a>
                        </li>
                        <!-- Si el usuario esta logeado poner su nombre -->
                        <li class="nav-item"><a class="nav-link active" href="#">@if (Auth::check()) {{ Auth::user()->name }} @endif</a>
                        </li>
                        <!-- Si el usuario esta logeado link para cerrar sesion -->
                        <li class="nav-item"><a class="nav-link active" href="#">@if (Auth::check()) <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a> @endif</a>
                        </li>
                        <!-- Si el usuario no esta logeado link para iniciar sesion -->
                        <li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">@if (!Auth::check()) Iniciar Sesion @endif</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <section style="background: #c99d84;">
            <div class="container">
                @yield('content')
</div>
        </section>
        <footer class="footer-dark" style="background: #851e39;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 text-center align-self-center item">
                        <h3 style="color: rgb(239,228,156);">Contactanos</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="color: rgb(239,228,156);">Sobre Nosotros</h3>
                        <ul>
                            <li><a href="#">Organizacion</a>
                            </li>
                            <li><a href="#">Proximos Eventos</a>
                            </li>
                            <li><a href="#">Noticias</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="color: rgb(239,228,156);">Encuentranos En :</h3>
                        <ul>
                            <li><a href="#">Twitter</a>
                            </li>
                            <li><a href="#">Facebook</a>
                            </li>
                            <li><a href="#">Instragram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="copyright" style="text-align: center;color: white; ">ANDASO © 2023</p>
            </div>
        </footer>
    </body>
</html>
