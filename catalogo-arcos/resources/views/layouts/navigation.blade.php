<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo_arcos.png') }}" alt="Logo" class="img-fluid" style="width: 60px; height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('arcos.index') }}">Arcos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('gallery') }}">Galería</a>
                </li>
                <!-- Si estamos registrados... -->
                @auth
                <!-- <li class="nav-item btn btn-secondary p-0 ms-5 shadow">
                    <a class="nav-link text-light" href="{{ route('arcos.create') }}">Agregar Arco</a>
                </li> -->
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Si estamos registrados podemos acceder al perfil o cerrar sesión -->
                @auth
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Perfil</a>
                </li> -->
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link fs-5">Cerrar Sesión</button>
                    </form>
                </li>
                @else
                <!-- Sino podemos iniciar sesión o registrarnos -->
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('register') }}">Registrarse</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>