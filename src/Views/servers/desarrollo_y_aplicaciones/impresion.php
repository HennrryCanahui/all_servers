<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Impresión <small class="text-muted">(Print Servers)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">Centralizando la Producción de Documentos.</p>
                <p>Un <strong>Servidor de Impresión</strong> es un equipo o dispositivo de red que gestiona las colas de impresión de múltiples impresoras. Actúa como el intermediario esencial entre los ordenadores de los usuarios y los dispositivos de salida física.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow rounded-4 overflow-hidden">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-printer-fill fs-1 me-4 text-primary"></i>
                        <div>
                            <p class="mb-0 fw-bold">Gestión Centralizada</p>
                            <p class="mb-0 small opacity-75">Controla quién imprime, qué se imprime y en qué orden, optimizando los recursos de la oficina.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. ¿Por qué centralizar la impresión?</h3>
                <p>El uso de un servidor dedicado ofrece ventajas de control y eficiencia que la conexión directa no permite:</p>
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-list-ol text-primary fs-2 mb-2"></i>
                            <h6 class="fw-bold small">Gestión de Colas</h6>
                            <p class="x-small text-muted mb-0">Organiza prioridades y permite cancelar trabajos desde un panel único.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-download text-success fs-2 mb-2"></i>
                            <h6 class="fw-bold small">Drivers Automáticos</h6>
                            <p class="x-small text-muted mb-0">Distribuye controladores correctos automáticamente a todos los PCs.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-shield-lock text-danger fs-2 mb-2"></i>
                            <h6 class="fw-bold small">Políticas de Uso</h6>
                            <p class="x-small text-muted mb-0">Restringe el color o establece cuotas de papel por departamento.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Protocolos de Comunicación</h3>
                <p>El servidor utiliza lenguajes específicos para "hablar" con las impresoras de la red:</p>
                <ul class="list-group list-group-flush shadow-sm rounded border">
                    <li class="list-group-item">
                        <strong>IPP (Internet Printing Protocol):</strong> El estándar moderno y seguro. Permite imprimir incluso a través de Internet.
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>LPR/LPD:</strong> Protocolo tradicional de sistemas Unix, ideal para redes locales estables.
                    </li>
                    <li class="list-group-item">
                        <strong>RAW / Puerto 9100:</strong> El método más directo y rápido para enviar datos a impresoras industriales.
                    </li>
                </ul>
            </section>

            <section class="mb-5">
                <div class="alert alert-info border-info shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-info"><i class="bi bi-person-check-fill me-2"></i>Sugerencia Técnica: Impresión Retenida (Pull Printing)</h4>
                    <p class="small mb-2">Conocido también como <strong>Follow-me Printing</strong>. El documento no sale hasta que el usuario se identifica físicamente en la impresora con un PIN o tarjeta.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Evita que documentos confidenciales queden olvidados en la bandeja y reduce drásticamente el desperdicio de papel.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>La RAM es fundamental para procesar archivos pesados de diseño o planos de ingeniería:</p>
                <div class="accordion shadow-sm" id="printMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpooling">
                                1. Spooling y Rasterización
                            </button>
                        </h2>
                        <div id="collapseSpooling" class="accordion-collapse collapse show" data-bs-parent="#printMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Conversión:</strong> Usa RAM para transformar archivos (PDF) a lenguajes que la impresora entienda (PCL o PostScript).</li>
                                    <li><strong>Rasterización:</strong> Este proceso consume mucha RAM en documentos con muchas capas o alta resolución.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDrivers">
                                2. Aislamiento de Controladores
                            </button>
                        </h2>
                        <div id="collapseDrivers" class="accordion-collapse collapse" data-bs-parent="#printMemAccordion">
                            <div class="accordion-body">
                                Los servidores modernos ejecutan drivers en espacios de memoria aislados. Si un driver de HP falla, no se lleva consigo la cola de impresión de la Canon. Esto garantiza estabilidad 24/7.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCleanup">
                                3. Limpieza de RAM Post-impresión
                            </button>
                        </h2>
                        <div id="collapseCleanup" class="accordion-collapse collapse" data-bs-parent="#printMemAccordion">
                            <div class="accordion-body">
                                Una vez enviado el trabajo, la RAM debe liberarse inmediatamente. Una mala gestión aquí causa "fugas" donde el servidor se muestra lleno por trabajos impresos horas atrás.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Flujo de Impresión</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-file-earmark-pdf display-1 text-primary mb-3"></i>
                    <h5>Usuario <i class="bi bi-arrow-right"></i> Servidor (Spooling) <i class="bi bi-arrow-right"></i> Impresora</h5>
                    <p class="text-muted small">Representación del ciclo de vida de un documento desde el PC hasta el papel.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: ¿Cómo funciona un Servidor de Impresión?</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Print Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white text-center fw-bold">Métricas de Control</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-graph-up-arrow fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Auditoría</h6>
                            <p class="small text-muted mb-0">Quién imprimió qué y cuándo.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-cash-stack fs-4 text-success"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Costos</h6>
                            <p class="small text-muted mb-0">Ahorro en tóners y papel.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-people-fill fs-4 text-info"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Colaboración</h6>
                            <p class="small text-muted mb-0">Impresoras compartidas eficientemente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Soluciones Populares</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Windows Print Server</h6>
                            <p class="mb-0 x-small text-muted">El estándar en entornos corporativos AD.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">CUPS <small>(Linux/Unix)</small></h6>
                            <h6 class="mb-0 x-small text-muted">El motor detrás de la impresión en macOS y Linux.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">PaperCut / YSoft</h6>
                            <p class="mb-0 x-small text-muted">Software avanzado de Pull Printing y cuotas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-info text-white mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-info-circle me-2"></i>Dato Curioso</h6>
                    <p class="x-small mb-0 opacity-75">Un plano de ingeniería complejo puede requerir hasta 4-8GB de RAM para ser rasterizado completamente antes de ser enviado a un plotter industrial.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>