<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Web <small class="text-muted">(HTTP Host)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">Los Anfitriones del Contenido Digital.</p>
                <p>Un <strong>Servidor Web</strong> es el software (y el hardware que lo aloja) diseñado para servir contenido a través de la red utilizando el protocolo <strong>HTTP/HTTPS</strong>. Su función principal es recibir peticiones de navegadores y entregar archivos estáticos o actuar como puente para aplicaciones dinámicas.</p>
                <div class="card bg-info bg-opacity-10 border-info border-opacity-25 p-4 mb-4 shadow rounded-4 overflow-hidden position-relative">
                    <div class="position-relative">
                        <p class="mb-0 fw-bold text-info">Entrega de Contenido</p>
                        <p class="mb-0 small text-muted">Gestiona el tráfico web mundial, sirviendo desde simples imágenes hasta complejas arquitecturas de microservicios.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Ciclo de Petición y Respuesta</h3>
                <p>El proceso que ocurre cada vez que introduces una URL se divide en cuatro pasos críticos:</p>
                
                <div class="row g-3 text-center mb-4">
                    <div class="col-6 col-md-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <i class="bi bi-search text-primary fs-3 d-block mb-2"></i>
                            <span class="small fw-bold">1. DNS</span>
                            <p class="x-small text-muted mb-0">Traducción de dominio a IP.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <i class="bi bi-arrow-right-circle text-success fs-3 d-block mb-2"></i>
                            <span class="small fw-bold">2. Request</span>
                            <p class="x-small text-muted mb-0">Solicitud de recurso (GET/POST).</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <i class="bi bi-cpu text-warning fs-3 d-block mb-2"></i>
                            <span class="small fw-bold">3. Proceso</span>
                            <p class="x-small text-muted mb-0">Búsqueda o generación de archivos.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <i class="bi bi-check-all text-info fs-3 d-block mb-2"></i>
                            <span class="small fw-bold">4. Response</span>
                            <p class="x-small text-muted mb-0">Envío de datos y código de estado.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Los Gigantes del Software Web</h3>
                <div class="table-responsive shadow-sm rounded border">
                    <table class="table table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Ideal para...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Nginx</td>
                                <td>Alto rendimiento y concurrencia.</td>
                                <td>Proxy inverso y sitios de gran tráfico.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Apache</td>
                                <td>Modularidad y flexibilidad extrema.</td>
                                <td>Hostings compartidos y configuraciones complejas.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">LiteSpeed</td>
                                <td>Velocidad y optimización nativa.</td>
                                <td>Rendimiento máximo en WordPress.</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Microsoft IIS</td>
                                <td>Integración con ecosistema Windows.</td>
                                <td>Empresas que usan .NET y Active Directory.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-primary border-primary shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-primary"><i class="bi bi-lightning-charge-fill me-2"></i>Sugerencia Técnica: HTTP/3 y QUIC</h4>
                    <p class="small mb-2">Activar <strong>HTTP/3</strong> permite que las webs carguen mucho más rápido en redes inestables (móviles). Utiliza <strong>QUIC</strong> (UDP) para eliminar los retrasos del saludo inicial de conexión.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Evita que la pérdida de un solo paquete bloquee toda la carga de la página, mejorando drásticamente la experiencia del usuario.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>Un servidor web eficiente debe gestionar sus recursos para evitar cuellos de botella:</p>
                <div class="accordion shadow-sm" id="webMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWorkers">
                                1. Modelos de Conexión (Workers)
                            </button>
                        </h2>
                        <div id="collapseWorkers" class="accordion-collapse collapse show" data-bs-parent="#webMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Basado en Procesos (Apache):</strong> Crea un proceso por petición. Mayor aislamiento, pero mucho más consumo de RAM.</li>
                                    <li><strong>Basado en Eventos (Nginx):</strong> Un solo hilo gestiona miles de conexiones asíncronas. Consumo de RAM minúsculo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCaching">
                                2. Static Content Caching y Buffering
                            </button>
                        </h2>
                        <div id="collapseCaching" class="accordion-collapse collapse" data-bs-parent="#webMemAccordion">
                            <div class="accordion-body">
                                <p><strong>RAM Caching:</strong> Mantiene archivos populares (logos, CSS) en RAM para servirlos en microsegundos sin tocar el disco.</p>
                                <p><strong>Buffers de Salida:</strong> Guarda trozos de respuestas dinámicas en RAM para que el envío por red sea fluido y constante.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeepAlive">
                                3. Gestión de Keep-Alive
                            </button>
                        </h2>
                        <div id="collapseKeepAlive" class="accordion-collapse collapse" data-bs-parent="#webMemAccordion">
                            <div class="accordion-body">
                                Administra cuánto tiempo se dedica RAM a mantener abiertas conexiones inactivas. Un tiempo muy largo bloquea la entrada a nuevos usuarios al agotar la memoria disponible.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Infraestructura Web</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-diagram-3-fill display-1 text-primary mb-3"></i>
                    <h5>Navegador <i class="bi bi-arrow-left-right"></i> Servidor Web <i class="bi bi-arrow-left-right"></i> Almacenamiento/App</h5>
                    <p class="text-muted small">Representación del flujo de datos entre el cliente y el servidor.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: ¿Qué es y cómo funciona un Servidor Web?</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Web Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white text-center fw-bold">Códigos de Estado HTTP</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-success me-3">200 OK</span>
                        <span class="small text-muted">Petición exitosa.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-warning text-dark me-3">301/302</span>
                        <span class="small text-muted">Redirecciones.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-danger me-3">404 Not Found</span>
                        <span class="small text-muted">Archivo no existe.</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-dark me-3">500 Server Error</span>
                        <span class="small text-muted">Fallo interno del servidor.</span>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Seguridad Básica</div>
                <div class="card-body small">
                    <p class="mb-2 fw-bold"><i class="bi bi-lock-fill text-success me-2"></i>Certificados TLS/SSL</p>
                    <p class="mb-2 fw-bold"><i class="bi bi-shield-shaded text-primary me-2"></i>Ocultamiento de Versión</p>
                    <p class="mb-0 fw-bold"><i class="bi bi-fire text-danger me-2"></i>Limitación de Tasa (Rate Limit)</p>
                </div>
            </div>

            <div class="card bg-primary text-white mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-lightbulb-fill me-2"></i>¿Sabías qué?</h6>
                    <p class="x-small mb-0 opacity-75">Nginx fue creado originalmente para resolver el problema "C10k", que es la dificultad técnica de gestionar 10,000 conexiones simultáneas en un solo servidor.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>