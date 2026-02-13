<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Aplicaciones <small class="text-muted">(App Servers)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">El Motor de la Lógica de Negocio.</p>
                <p>Un <strong>Servidor de Aplicaciones</strong> es un entorno de software diseñado para ejecutar aplicaciones web complejas. A diferencia de un servidor web básico, genera contenido dinámico ejecutando código (Java, .NET, Python) y gestionando la comunicación con bases de datos.</p>
                <div class="card bg-primary bg-opacity-10 border-primary border-opacity-25 p-4 mb-4 shadow-sm rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-gear-fill fs-1 me-4 text-primary"></i>
                        <div>
                            <p class="mb-0 fw-bold text-primary">Procesamiento Dinámico</p>
                            <p class="mb-0 small text-muted">Es el responsable de realizar cálculos, validar usuarios y ejecutar los procesos internos que hacen que una aplicación funcione.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. El Modelo de Tres Capas</h3>
                <p>En una arquitectura profesional, el servidor de aplicaciones ocupa el lugar central:</p>
                
                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="p-3 border rounded bg-light border-start border-4 border-secondary">
                        <h6 class="fw-bold mb-1">1. Capa de Presentación <small class="text-muted">(Servidor Web)</small></h6>
                        <p class="small mb-0">Apache, Nginx. Entrega HTML, CSS e Imágenes.</p>
                    </div>
                    <div class="p-3 border rounded bg-white shadow-sm border-start border-4 border-primary scale-up">
                        <h6 class="fw-bold mb-1 text-primary">2. Capa de Aplicación <small class="text-muted">(Donde ocurre el código)</small></h6>
                        <p class="small mb-0">Tomcat, JBoss, IIS. Procesa lógica, impuestos y pedidos.</p>
                    </div>
                    <div class="p-3 border rounded bg-light border-start border-4 border-dark">
                        <h6 class="fw-bold mb-1">3. Capa de Datos <small class="text-muted">(Servidor DB)</small></h6>
                        <p class="small mb-0">MySQL, PostgreSQL. Almacena la información persistente.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Funciones de Middleware</h3>
                <p>El servidor ofrece servicios esenciales integrados para el desarrollador:</p>
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="text-center p-3 border rounded shadow-sm h-100">
                            <i class="bi bi-arrow-repeat text-success fs-3 mb-2"></i>
                            <h6 class="fw-bold small">Gestión de Transacciones</h6>
                            <p class="x-small text-muted mb-0">Asegura que las operaciones bancarias sean atómicas (todo o nada).</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3 border rounded shadow-sm h-100">
                            <i class="bi bi-plug-fill text-info fs-3 mb-2"></i>
                            <h6 class="fw-bold small">Connection Pooling</h6>
                            <p class="x-small text-muted mb-0">Mantiene conexiones a DB abiertas para ganar velocidad.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3 border rounded shadow-sm h-100">
                            <i class="bi bi-shield-check text-danger fs-3 mb-2"></i>
                            <h6 class="fw-bold small">Seguridad Centralizada</h6>
                            <p class="x-small text-muted mb-0">Gestiona cifrado y autenticación de usuarios de forma nativa.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-warning border-warning shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-warning"><i class="bi bi-lightning-fill me-2"></i>Sugerencia Técnica: Hot Deployment</h4>
                    <p class="small mb-2">Permite actualizar el código de una aplicación <strong>sin apagar el servidor</strong> ni desconectar usuarios. El servidor carga la nueva versión en RAM y migra sesiones de forma transparente.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Vital para servicios críticos que requieren disponibilidad 24/7 incluso durante mantenimientos.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>La gestión de la RAM es crítica para evitar que aplicaciones pesadas congelen el sistema:</p>
                <div class="accordion shadow-sm" id="appMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHeap">
                                1. Gestión del Heap y Garbage Collection
                            </button>
                        </h2>
                        <div id="collapseHeap" class="accordion-collapse collapse show" data-bs-parent="#appMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Asignación en Heap:</strong> Espacio de RAM donde se crean los objetos (carritos de compra, sesiones).</li>
                                    <li><strong>Garbage Collector:</strong> Proceso automático que libera memoria de objetos en desuso. Si falla, ocurren "pausas" o congelamientos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSessions">
                                2. Memoria de Sesión y Serialización
                            </button>
                        </h2>
                        <div id="collapseSessions" class="accordion-collapse collapse" data-bs-parent="#appMemAccordion">
                            <div class="accordion-body">
                                Los datos de perfil y preferencias se guardan en RAM. Para ahorrar espacio, el servidor usa <strong>Serialización</strong>, moviendo sesiones inactivas al disco o a bases de datos externas (Redis).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePooling">
                                3. Resource Pooling
                            </button>
                        </h2>
                        <div id="collapsePooling" class="accordion-collapse collapse" data-bs-parent="#appMemAccordion">
                            <div class="accordion-body">
                                Reutiliza objetos "costosos" (como conexiones SQL) que ya están en RAM en lugar de crearlos de cero en cada petición, minimizando la fragmentación y el uso de CPU.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Lógica de Negocio</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-box-arrow-in-right display-1 text-primary mb-3"></i>
                    <h5>Entrada HTTP <i class="bi bi-arrow-right"></i> Lógica Interna <i class="bi bi-arrow-right"></i> Salida Dinámica</h5>
                    <p class="text-muted small">Representación del ciclo de vida de una petición en el servidor de aplicaciones.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona un App Server</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Application Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white text-center fw-bold">Ecosistemas de Desarrollo</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-code-square fs-4 text-danger"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Java EE</h6>
                            <p class="small text-muted mb-0">Tomcat, JBoss, WebLogic.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-microsoft fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">.NET Stack</h6>
                            <p class="small text-muted mb-0">Internet Information Services (IIS).</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-filetype-py fs-4 text-warning"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Python/Node</h6>
                            <p class="small text-muted mb-0">Gunicorn, PM2, Express.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Características Clave</div>
                <div class="card-body small">
                    <p class="mb-2 fw-bold text-primary"><i class="bi bi-check-circle me-2"></i>Escalabilidad Horizontal</p>
                    <p class="mb-2 fw-bold text-primary"><i class="bi bi-check-circle me-2"></i>Clustering de Sesiones</p>
                    <p class="mb-2 fw-bold text-primary"><i class="bi bi-check-circle me-2"></i>Failover Automático</p>
                    <p class="mb-0 fw-bold text-primary"><i class="bi bi-check-circle me-2"></i>Balanceo de Hilos</p>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark text-center fw-bold">Monitorización</div>
                <div class="card-body small">
                    <p class="mb-1 text-muted"><strong>JMX:</strong> Para Java Monitoring.</p>
                    <hr class="my-1">
                    <p class="mb-0 text-muted"><strong>APM:</strong> Como New Relic o Dynatrace.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>