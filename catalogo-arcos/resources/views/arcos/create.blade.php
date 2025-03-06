@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Agregar Nuevo Arco</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow bg-light-subtle">
                <div class="card-body">
                    <form action="{{ route('arcos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Campo: Nombre -->
                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <!-- Campo: Tipo -->
                        <div class="form-group mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" required>
                        </div>

                        <!-- Campo: Descripción -->
                        <div class="form-group mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
                        </div>

                        <!-- Campo: Imagen principal -->
                        <div class="form-group mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" name="imagen" id="imagen" class="form-control-file">
                        </div>

                        <!-- Campo: Curiosidad -->
                        <div class="form-group mb-3">
                            <label for="curiosidad" class="form-label">Curiosidad</label>
                            <textarea name="curiosidad" id="curiosidad" class="form-control" rows="4"></textarea>
                        </div>

                        <!-- Campo: Imagen de curiosidad -->
                        <div class="form-group mb-3">
                            <label for="imagen_curiosidad" class="form-label">URL de la imagen de curiosidad</label>
                            <input type="text" name="imagen_curiosidad" id="imagen_curiosidad" class="form-control" placeholder="Ej: https://ejemplo.com/imagen.jpg">
                        </div>

                        <!-- Botones -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-secondary me-md-2">Guardar</button>
                            <a href="{{ route('arcos.index') }}" class="btn btn-dark">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection