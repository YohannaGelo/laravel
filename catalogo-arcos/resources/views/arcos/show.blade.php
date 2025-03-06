@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 display-5">{{ $arco->nombre }}</h1>
    <div class="row">
        <div class="col-md-6">
            @if ($arco->imagen)
                <img src="{{ asset('storage/' . $arco->imagen) }}" class="img-fluid" alt="{{ $arco->nombre }}" style="height: 400px;">
            @else
                <div class="bg-secondary text-white text-center py-5">Sin imagen</div>
            @endif
        </div>
        <div class="col-md-6">
            <p><strong>Tipo:</strong> {{ $arco->tipo }}</p>
            <p><strong>Descripción:</strong> {{ $arco->descripcion }}</p>

            <!-- Card de curiosidad -->
            @if ($arco->curiosidad && $arco->imagen_curiosidad)
                <div class="card col-8 col-sm-12 mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $arco->imagen_curiosidad }}" class="img-fluid rounded-start" alt="Curiosidad sobre {{ $arco->nombre }}" style="height: 100%;">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">Curiosidad sobre {{ $arco->nombre }}</h5>
                                <p class="card-text">{{ $arco->curiosidad }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <a href="{{ route('arcos.edit', $arco->id) }}" class="btn btn-secondary">Editar</a>
            <form action="{{ route('arcos.destroy', $arco->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark" onclick="return confirm('¿Estás seguro de eliminar este arco?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection