<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor DNS <small class="text-muted">(Domain Name System)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un servidor DNS es un sistema informático que se encarga de traducir nombres de dominio, como «www.ejemplo.com», en direcciones IP numéricas, como «192.168.1.1».</p>
                <div class="card bg-light border-0 p-4 mb-4">
                    <p>Actúa como una especie de «agenda telefónica» que relaciona nombres de dominio con direcciones IP. Sin un sistema DNS, los usuarios tendrían que recordar direcciones IP complejas para acceder a los sitios web.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>¿Cómo funciona un Servidor DNS?</h3>
                <ol class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>1. Solicitud:</strong> Se introduce un nombre de dominio en el navegador.</li>
                    <li class="list-group-item"><strong>2. Caché Local:</strong> Se verifica si la información ya está almacenada localmente.</li>
                    <li class="list-group-item"><strong>3. Servidor Recursivo:</strong> Se envía la solicitud al ISP.</li>
                    <li class="list-group-item"><strong>4. Servidores Raíz:</strong> Dirigen a los servidores TLD correspondientes.</li>
                    <li class="list-group-item"><strong>5. Servidores TLD:</strong> Redirigen al servidor autoritativo del dominio.</li>
                    <li class="list-group-item"><strong>6. Servidor Autoritativo:</strong> Proporciona la dirección IP final.</li>
                </ol>
                
                <div class="text-center my-4">
                    <img src="https://dinahosting.com/blog/upload/2021/02/funcionamiento-DNS-585x392.jpg" class="img-fluid rounded shadow" alt="Diagrama de funcionamiento DNS">
                    <p class="text-muted small mt-2">Diagrama técnico del proceso de resolución DNS</p>
                </div>
                </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <div class="accordion" id="memoryAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                1. Sistema de Caché (Memoria Volátil)
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#memoryAccordion">
                            <div class="accordion-body">
                                La mayor parte de la memoria se dedica a la caché para guardar respuestas de consultas previas, ahorrando recursos y mejorando la velocidad (leer de RAM es miles de veces más rápido).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                2. Gestión mediante TTL (Time To Live)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#memoryAccordion">
                            <div class="accordion-body">
                                El servidor purga datos automáticamente según el valor TTL definido por el dueño del dominio, evitando que la RAM se llene de información obsoleta.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/t7EGv2I5FpM"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>

        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Tipos de Servidores DNS</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Recursivos:</strong> El primer punto de contacto.</li>
                    <li class="list-group-item"><strong>Raíz:</strong> El nivel superior de la jerarquía.</li>
                    <li class="list-group-item"><strong>TLD:</strong> Información sobre extensiones (.com, .net).</li>
                    <li class="list-group-item"><strong>Autoritativos:</strong> La fuente definitiva de un dominio.</li>
                </ul>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Seguridad y Problemas</div>
                <div class="card-body">
                    <h6>Envenenamiento de Caché</h6>
                    <p class="small text-muted">Manipulación de respuestas para redirigir tráfico malicioso.</p>
                    <h6>Latencia</h6>
                    <p class="small text-muted">Retraso en la resolución que afecta la navegación.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
