@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h1 class="my-4">Catálogo de Arcos</h1>
    @auth
        <a href="{{ route('arcos.create') }}" class="btn btn-primary mb-4">Agregar Arco</a>
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
                        <a href="{{ route('arcos.show', $arco->id) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection