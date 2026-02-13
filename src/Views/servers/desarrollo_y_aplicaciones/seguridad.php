<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Seguridad <small class="text-muted">(Ciberdefensa)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-dark fw-bold">El Centro de Comando de la Defensa Táctica.</p>
                <p>Un <strong>Servidor de Seguridad</strong> no es un simple filtro; es una plataforma dedicada a la detección, prevención y respuesta ante amenazas. Mientras un firewall bloquea el tráfico en la frontera, estos servidores analizan el comportamiento profundo para cazar atacantes que ya lograron entrar.</p>
                <div class="card bg-dark text-white border-0 p-4 mb-4 shadow rounded-4 overflow-hidden position-relative">
                    <div class="position-relative">
                        <p class="mb-0 fw-bold text-warning">Inteligencia de Amenazas</p>
                        <p class="mb-0 small opacity-75">Utiliza análisis heurístico y correlación de eventos para identificar patrones maliciosos en milisegundos.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Ecosistema de Protección</h3>
                <p>Dependiendo de su posición y objetivo, los servidores se especializan en diferentes tareas:</p>
                
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-eye-fill text-primary fs-2 mb-2"></i>
                                <h6 class="fw-bold">IDS / IPS</h6>
                                <p class="x-small text-muted mb-0">Escaneo de firmas. El IDS avisa; el IPS corta la conexión automáticamente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-journal-text text-success fs-2 mb-2"></i>
                                <h6 class="fw-bold">SIEM</h6>
                                <p class="x-small text-muted mb-0">Recolector de logs masivos para buscar correlaciones de ataques complejos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-webcam-fill text-danger fs-2 mb-2"></i>
                                <h6 class="fw-bold">WAF</h6>
                                <p class="x-small text-muted mb-0">Filtro especializado para proteger aplicaciones web (SQLi, XSS).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Análisis Heurístico</h3>
                <p>Los servidores modernos no solo buscan "virus conocidos", analizan comportamientos anómalos:</p>
                <div class="p-4 border rounded bg-white shadow-sm mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-cpu-fill text-secondary me-3 fs-3"></i>
                        <h6 class="fw-bold mb-0">Detección por Anomalía</h6>
                    </div>
                    <p class="small text-muted">Si un servidor de archivos envía gigabytes a una IP desconocida a las 3:00 AM, el sistema dispara una alerta táctica basada en el historial de tráfico, incluso si no hay malware detectado.</p>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-warning border-warning shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-dark"><i class="bi bi-bug-fill me-2 text-warning"></i>Sugerencia Técnica: El uso de "Honeypots"</h4>
                    <p class="small mb-2">Configura servidores "trampa" (Honeypots) que parezcan vulnerables. Cualquier interacción con ellos es, por definición, maliciosa.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Permite estudiar las técnicas del atacante y bloquear su IP real antes de que toque la infraestructura verdadera.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>La RAM es el recurso crítico; si falla, el servidor se vuelve "ciego" ante un ataque:</p>
                <div class="accordion shadow-sm" id="secMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDPI">
                                1. DPI (Deep Packet Inspection) en RAM
                            </button>
                        </h2>
                        <div id="collapseDPI" class="accordion-collapse collapse show" data-bs-parent="#secMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Buffers de Reensamblado:</strong> Reserva bloques masivos de RAM para reconstruir paquetes fragmentados antes del análisis.</li>
                                    <li><strong>Caché de Firmas:</strong> Carga miles de huellas de ataques en la memoria más rápida para comparaciones en nanosegundos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSIEM">
                                2. Indexación y Correlación SIEM
                            </button>
                        </h2>
                        <div id="collapseSIEM" class="accordion-collapse collapse" data-bs-parent="#secMemAccordion">
                            <div class="accordion-body">
                                Mantiene ventanas de tiempo (ej. los últimos 10 min de logs de toda la red) íntegramente en RAM para buscar patrones cruzados sin latencia de lectura de disco.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOverflow">
                                3. Protección contra Desbordamiento (DDoS)
                            </button>
                        </h2>
                        <div id="collapseOverflow" class="accordion-collapse collapse" data-bs-parent="#secMemAccordion">
                            <div class="accordion-body">
                                Ante una avalancha de datos, utiliza gestión jerárquica: prioriza logs críticos del sistema y descarta telemetría no esencial si la RAM alcanza el 95% de capacidad.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Ciberdefensa</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-shield-shaded display-1 text-dark mb-3"></i>
                    <h5>Amenaza <i class="bi bi-arrow-right"></i> Análisis DPI <i class="bi bi-arrow-right"></i> Mitigación IPS</h5>
                    <p class="text-muted small">Representación del proceso de detección y bloqueo en tiempo real.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Seguridad y Prevención de Intrusos</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Security Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-dark mb-4 shadow">
                <div class="card-header bg-dark text-white text-center fw-bold">Pilares SOC</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-search fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Detección</h6>
                            <p class="small text-muted mb-0">Identificar el vector de ataque.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-hand-stop-fill fs-4 text-danger"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Contención</h6>
                            <p class="small text-muted mb-0">Aislar sistemas afectados.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-tools fs-4 text-success"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Recuperación</h6>
                            <p class="small text-muted mb-0">Restaurar servicios seguros.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white text-center fw-bold">Tecnologías Líderes</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Splunk / Elastic (ELK)</h6>
                            <p class="mb-0 x-small text-muted">Plataformas SIEM de alto rendimiento.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Suricata / Snort</h6>
                            <h6 class="mb-0 x-small text-muted">Motores IDS/IPS de código abierto.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Fortinet / Palo Alto</h6>
                            <p class="mb-0 x-small text-muted">Líderes en hardware de seguridad activa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-warning text-dark mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Dato de Riesgo</h6>
                    <p class="x-small mb-0 opacity-75">Un servidor de seguridad saturado puede entrar en modo <strong>"Fail-Open"</strong> (dejar pasar todo por seguridad de la red) o <strong>"Fail-Close"</strong> (bloquear todo el tráfico oficial).</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>