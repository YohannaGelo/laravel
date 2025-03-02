@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Agregar Nuevo Arco</h1>
    <form action="{{ route('arcos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('arcos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection