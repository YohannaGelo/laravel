@extends('layouts.app')

@section('title', 'Galería')

@section('content')
<div class="container">
    <div class="banner my-4">
        <img src="{{ asset('img/banner.jpeg') }}" class="img-fluid rounded" alt="Banner de la galería">
    </div>

    <h1 class="my-4 display-5">Galería de Imágenes Familiar</h1>
    <div class="row">
        @foreach ($imagenes as $imagen)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow"> <!-- Asegura que todas las tarjetas tengan la misma altura -->
                @if ($imagen->imagen && file_exists(public_path('storage/' . $imagen->imagen)))
                <img src="{{ asset('storage/' . $imagen->imagen) }}" class="card-img-top" alt="{{ $imagen->nombre }}">
                @else
                <div class="card-img-top bg-secondary text-white text-center py-5">Sin imagen (Ruta: {{ $imagen->imagen }})</div>
                @endif
                <div class="card-body d-flex flex-column">
                    <p class="card-title text-center mb-3  text-secondary">{{ $imagen->nombre }}</p>

                    @if(Auth::check())
                    <form action="{{ route('comments.store', $imagen) }}" method="POST" class="mt-auto"> <!-- mt-auto para empujar el formulario hacia abajo -->
                        @csrf
                        <textarea name="contenido" class="form-control mb-2" placeholder="Escribe un comentario..." required></textarea>
                        <button type="submit" class="btn btn-secondary btn-sm">Comentar</button>
                    </form>
                    @endif

                    <h5 class="mt-3 text-uppercase fs-5 text-end">Comentarios</h5>
                    <div class="mt-1 flex-grow-1 bg-body-tertiary rounded" style="overflow-y: auto; max-height: 100px;"> <!-- Scroll para los comentarios -->
                        @if($imagen->comments->count())
                        <ul class="list-group">
                            @foreach($imagen->comments as $comment)
                            <li class="list-group-item ">
                                <strong class="text-secondary">{{ $comment->user->name }}:</strong> {{ $comment->contenido }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
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