@extends('layouts.app')

@section('title', 'Galería')

@section('content')
<div class="container">
    <div class="banner my-4">
        <img src="{{ asset('img/banner.jpeg') }}" class="img-fluid rounded" alt="Banner de la galería">
    </div>

    <h1 class="my-4">Galería de Imágenes</h1>
    <div class="row">
        @foreach ($imagenes as $imagen)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($imagen->imagen && file_exists(public_path('storage/' . $imagen->imagen)))
                <img src="{{ asset('storage/' . $imagen->imagen) }}" class="card-img-top" alt="{{ $imagen->nombre }}">
                @else
                <div class="card-img-top bg-secondary text-white text-center py-5">Sin imagen (Ruta: {{ $imagen->imagen }})</div>
                @endif
                <div class="card-body">
                    <p class="card-title">{{ $imagen->nombre }}</p>
                </div>

                @if(Auth::check())
                <form action="{{ route('comments.store', $imagen) }}" method="POST">
                    @csrf
                    <textarea name="contenido" class="form-control mb-2" placeholder="Escribe un comentario..." required></textarea>
                    <button type="submit" class="btn btn-primary btn-sm">Comentar</button>
                </form>
                @endif

                @if($imagen->comments->count())
                <div class="mt-3">
                    <h5>Comentarios:</h5>
                    <ul class="list-group">
                        @foreach($imagen->comments as $comment)
                        <li class="list-group-item">
                            <strong>{{ $comment->user->name }}:</strong> {{ $comment->contenido }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif



            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection