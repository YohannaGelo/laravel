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
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection