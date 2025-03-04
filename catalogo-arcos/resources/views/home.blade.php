@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <div class="banner my-4">
        <img src="{{ asset('img/bannerInicio.jpg') }}" class="img-fluid rounded" alt="Banner de la galería">
    </div>

    <h1 class="my-4 text-center">Bienvenidos a Nuestra Pasión por el Tiro con Arco</h1>

    <p class="text-center">Esta es una página dedicada a nuestra afición familiar por el tiro con arco. 
        Aquí compartimos nuestros mejores momentos y también iremos recopilando información sobre los 
        diferentes tipos de arcos. ¡Gracias por visitarnos!</p>

    <div class="text-center my-4">
        <a href="{{ route('gallery') }}" class="btn btn-secondary mx-2">Ver Galería Familiar</a>
        
        <a href="{{ route('arcos.index') }}" class="btn btn-dark mx-2">Gestionar Arcos</a>
        
    </div>
        
    </div>
</div>
@endsection
