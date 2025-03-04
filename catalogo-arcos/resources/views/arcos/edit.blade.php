@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Arco: {{ $arco->nombre }}</h1>
    <form action="{{ route('arcos.update', $arco->id) }}" method="POST" enctype="multipart/form-data">
        <!-- Directiva para asegurar que los datos del formulario son correctos (es un token) -->    
        @csrf
        <!-- Directiva para incluir el método que usará el formulario -->
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $arco->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $arco->tipo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ $arco->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control-file">
            @if ($arco->imagen)
                <img src="{{ asset('storage/' . $arco->imagen) }}" class="img-thumbnail mt-2" width="100" alt="{{ $arco->nombre }}">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('arcos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection