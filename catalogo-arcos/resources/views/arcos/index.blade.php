@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h1 class="my-4 display-5">Conociendo Tipos de Arcos</h1>
    <!-- Si estamos logueados... -->
    @auth
        <a href="{{ route('arcos.create') }}" class="btn btn-secondary mb-4 shadow">Agregar Arco</a>
    @endauth
    <div class="row">
        @foreach ($arcos as $arco)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($arco->imagen && file_exists(public_path('storage/' . $arco->imagen)))
                        <img src="{{ asset('storage/' . $arco->imagen) }}" class="card-img-top" alt="{{ $arco->nombre }}">
                    @else
                        <div class="card-img-top bg-secondary text-white text-center py-5">Sin imagen</div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $arco->nombre }}</h5>
                        <p class="card-text">{{ $arco->tipo }}</p>
                        <a href="{{ route('arcos.show', $arco->id) }}" class="btn btn-secondary">Ver detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Botón flotante para subir -->
<button id="scrollToTopBtn" class="btn btn-secondary rounded-circle shadow fs-5" style="position: fixed; bottom: 20px; right: 20px; display: none; transform: rotate(270deg);">
    <i class="bi bi-heart-arrow"></i>
</button>

<script>
    // Mostrar u ocultar el botón según la posición del scroll
    window.onscroll = function() {
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    };

    // Función para subir al principio de la página
    document.getElementById('scrollToTopBtn').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Desplazamiento suave
        });
    });
</script>
@endsection