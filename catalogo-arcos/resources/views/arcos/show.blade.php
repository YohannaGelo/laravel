@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $arco->nombre }}</h1>
    <div class="row">
        <div class="col-md-6">
            @if ($arco->imagen)
                <img src="{{ asset('storage/' . $arco->imagen) }}" class="img-fluid" alt="{{ $arco->nombre }}">
            @else
                <div class="bg-secondary text-white text-center py-5">Sin imagen</div>
            @endif
        </div>
        <div class="col-md-6">
            <p><strong>Tipo:</strong> {{ $arco->tipo }}</p>
            <p><strong>Descripción:</strong> {{ $arco->descripcion }}</p>
            <a href="{{ route('arcos.edit', $arco->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('arcos.destroy', $arco->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este arco?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection