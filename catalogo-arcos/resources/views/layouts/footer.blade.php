<footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-2">
                <h5 class="text-uppercase">Sobre Nosotros</h5>
                <p>Desde Utrera, un pueblo de Sevilla, os traemos algunos buenos<br>momentos vividos alrededor de los arcos y las flechas.
                <br>¡Conócenos y déjanos conocerte!</p>

            </div>

            <div class="col-lg-3 col-md-6 mb-2">
                <h5 class="text-uppercase">Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-dark text-decoration-none">Inicio</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-dark text-decoration-none">Galería</a></li>
                    <li><a href="{{ route('arcos.index') }}" class="text-dark text-decoration-none">Arcos</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-2">
                <h5 class="text-uppercase">Síguenos</h5>
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="text-center p-3 bg-dark text-white">
        &copy; {{ date('Y') }} Tiro con Arco en Familia - Todos los derechos reservados
    </div>
</footer>
