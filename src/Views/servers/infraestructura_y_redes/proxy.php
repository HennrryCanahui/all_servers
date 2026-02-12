<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Proxy <small class="text-muted">(Intermediario)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">El Intermediario Estratégico de la Red.</p>
                <p>Un Servidor Proxy actúa como un puente entre un dispositivo final (como tu ordenador) e Internet. En lugar de que el usuario se conecte directamente a una web, le pide al Proxy que lo haga por él, actuando como un "representante" que gestiona la petición.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm">
                    <p class="mb-0"><strong>¿Cómo funciona?</strong> El cliente envía la solicitud al Proxy, este la procesa (revisa reglas, caché, etc.), la envía al servidor de destino, recibe la respuesta y finalmente se la entrega al cliente.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Tipos de Proxies Según su Dirección</h3>
                <div class="row g-4 mt-2">
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-primary">
                            <span class="badge bg-primary mb-2">Forward Proxy</span>
                            <p class="small text-muted mb-0">Común en empresas. Los empleados pasan por él para salir a Internet. Controla qué páginas ven los usuarios.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-success">
                            <span class="badge bg-success mb-2">Reverse Proxy</span>
                            <p class="small text-muted mb-0">Delante de servidores web. Recibe peticiones de Internet y las reparte (Balanceo de Carga).</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-secondary">
                            <span class="badge bg-secondary mb-2">Proxy Transparente</span>
                            <p class="small text-muted mb-0">El usuario no sabe que pasa por uno. Se usa en redes públicas (Wifi gratis) para forzar el login.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria: El Poder del "Caching"</h3>
                <p>La característica más potente de un Proxy es su capacidad para gestionar memoria mediante el Cache de Contenidos.</p>
                <div class="accordion shadow-sm" id="proxyAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCache">
                                1. Gestión del Almacenamiento (Hit vs Miss)
                            </button>
                        </h2>
                        <div id="collapseCache" class="accordion-collapse collapse show" data-bs-parent="#proxyAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Hit de Caché:</strong> El usuario pide una web que ya está en la memoria del Proxy. Se entrega instantáneamente sin salir a Internet.</li>
                                    <li><strong>Miss de Caché:</strong> El contenido no está en memoria. El Proxy lo descarga, lo entrega al usuario y guarda una copia para el siguiente.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlgo">
                                2. Algoritmos de Reemplazo (LRU y LFU)
                            </button>
                        </h2>
                        <div id="collapseAlgo" class="accordion-collapse collapse" data-bs-parent="#proxyAccordion">
                            <div class="accordion-body">
                                Como la memoria no es infinita, el Proxy debe decidir qué borrar cuando se llena:
                                <ul class="mt-2">
                                    <li><strong>LRU (Least Recently Used):</strong> Borra lo que lleva más tiempo sin ser consultado.</li>
                                    <li><strong>LFU (Least Frequently Used):</strong> Borra lo que se consulta pocas veces, manteniendo los sitios populares.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReglas">
                                3. Memoria de Reglas y ACLs
                            </button>
                        </h2>
                        <div id="collapseReglas" class="accordion-collapse collapse" data-bs-parent="#proxyAccordion">
                            <div class="accordion-body">
                                El Proxy mantiene en RAM una lista de Control de Acceso (ACL). Las categorías (Juegos, Noticias, Malware) se guardan en caché local para evitar consultas constantes a la nube, mejorando la velocidad de respuesta.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Diagrama de Funcionamiento</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <!-- Placeholder de Imagen -->
                    <i class="bi bi-hdd-network display-1 text-primary mb-3"></i>
                    <h5>Flujo: Cliente <i class="bi bi-arrow-right"></i> Proxy <i class="bi bi-arrow-right"></i> Internet</h5>
                    <p class="text-muted small">El proxy intercepta la comunicación para filtrar o acelerar el contenido.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Proxy vs Reverse Proxy Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white">Funciones Estratégicas</div>
                <div class="card-body">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-shield-lock-fill text-primary fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Anonimato</h6>
                            <p class="small text-muted mb-0">Oculta la IP real del cliente ante el servidor de destino.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-speedometer2 text-success fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Aceleración</h6>
                            <p class="small text-muted mb-0">Mejora la velocidad de carga mediante el almacenamiento en caché.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start">
                        <i class="bi bi-filter-circle-fill text-danger fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Filtrado</h6>
                            <p class="small text-muted mb-0">Bloquea contenidos no permitidos (Redes sociales, sitios maliciosos).</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Software Popular</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0 small">
                        <li class="mb-2"><strong>Squid:</strong> El estándar para Forward Proxy y caché en Linux.</li>
                        <li class="mb-2"><strong>Nginx / HAProxy:</strong> Líderes como Reverse Proxy y balanceadores.</li>
                        <li><strong>Varnish:</strong> Acelerador de contenido especializado en caché agresivo.</li>
                    </ul>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark">Conceptos Clave</div>
                <div class="card-body small">
                    <h6 class="fw-bold mb-1">Inspección HTTPS</h6>
                    <p class="text-muted">Desencripta el tráfico en memoria para buscar virus antes de enviarlo (SSL Inspection).</p>
                    <hr>
                    <h6 class="fw-bold mb-1">TTL (Time to Live)</h6>
                    <p class="text-muted">Tiempo que el contenido permanece en el caché del proxy antes de considerarse obsoleto.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>