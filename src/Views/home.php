<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="jumbotron shadow p-5 mb-5 bg-white rounded text-center">
    <h1 class="display-4">Bienvenido a ServerWiki</h1>
    <p class="lead">Tu guía interactiva para entender el funcionamiento de los servidores de red.</p>
    <hr class="my-4">
    <p class="text-muted">Explora los diferentes tipos de servidores y cómo gestionan sus recursos a través de esta enciclopedia interactiva.</p>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title mt-3">Servidor DNS</h5>
                    <p class="card-text text-muted">Aprende sobre la traducción de nombres de dominio y gestión de memoria.</p>
                    <a href="/servidor/dns" class="btn btn-primary mt-3">Explorar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 opacity-75">
                <div class="card-body text-center">
                    <h5 class="card-title mt-3 text-muted">Servidor Web</h5>
                    <p class="card-text text-muted">Gestión de protocolos HTTP y recursos estáticos.</p>
                    <button class="btn btn-secondary mt-3" disabled>En construcción</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 opacity-75">
                <div class="card-body text-center">
                    <h5 class="card-title mt-3 text-muted">Servidor DHCP</h5>
                    <p class="card-text text-muted">Asignación dinámica de direcciones IP en la red.</p>
                    <button class="btn btn-secondary mt-3" disabled>En construcción</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
