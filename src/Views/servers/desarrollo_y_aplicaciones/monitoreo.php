<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Monitoreo <small class="text-muted">(Observabilidad)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-danger fw-bold">El Sistema Nervioso de la Infraestructura.</p>
                <p>Un <strong>Servidor de Monitoreo</strong> es una plataforma centralizada que observa, recolecta y analiza el estado de salud de todos los componentes de una red. Su función es detectar fallos o cuellos de botella antes de que afecten al usuario final.</p>
                <div class="card bg-danger bg-opacity-10 border-danger border-opacity-25 p-4 mb-4 shadow rounded-4 overflow-hidden position-relative">
                    <div class="position-relative">
                        <p class="mb-0 fw-bold text-danger">Alerta Temprana</p>
                        <p class="mb-0 small text-muted">Monitoriza hardware, servicios, tráfico y aplicaciones en tiempo real para garantizar la continuidad del negocio.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Métodos de Recolección de Datos</h3>
                <p>El servidor obtiene información de la infraestructura mediante dos estrategias:</p>
                
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-top border-4 border-primary">
                            <div class="card-body">
                                <h6 class="fw-bold">Basado en Agentes</h6>
                                <p class="small text-muted">Software local que envía datos profundos (Logs, procesos específicos) al central.</p>
                                <span class="badge bg-primary-subtle text-primary">Zabbix Agent, Datadog, Prometheus Exporter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-top border-4 border-info">
                            <div class="card-body">
                                <h6 class="fw-bold">Sin Agentes <small>(Agentless)</small></h6>
                                <p class="small text-muted">Usa protocolos estándar (SNMP, WMI, SSH) para interrogar a los dispositivos.</p>
                                <span class="badge bg-info-subtle text-info">SNMP, WMI, ICMP (Ping)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Niveles de Monitoreo</h3>
                <div class="list-group list-group-flush shadow-sm rounded border">
                    <div class="list-group-item d-flex align-items-center">
                        <i class="bi bi-reception-4 fs-3 me-3 text-success"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Disponibilidad (Up/Down)</h6>
                            <p class="small text-muted mb-0">Verifica si el servicio responde o está "caído". Es el nivel más básico y crítico.</p>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center bg-light">
                        <i class="bi bi-graph-up fs-3 me-3 text-primary"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Rendimiento (Performance)</h6>
                            <p class="small text-muted mb-0">Mide métricas en el tiempo: latencia, uso de disco, temperatura de CPU.</p>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center">
                        <i class="bi bi-person-video3 fs-3 me-3 text-warning"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Experiencia de Usuario (RUM)</h6>
                            <p class="small text-muted mb-0">Simula interacciones reales para verificar tiempos de carga desde diferentes regiones.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-danger border-danger shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-danger"><i class="bi bi-clock-history me-2"></i>Sugerencia Técnica: Establecimiento de Líneas Base (Baselines)</h4>
                    <p class="small mb-2">No basta con saber que la CPU está al 80%. Lo importante es saber si ese 80% es <strong>normal</strong> para un lunes a las 10:00 AM.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Los servidores modernos aprenden el comportamiento histórico y solo disparan alertas ante anomalías reales, evitando la "fatiga de alertas" del administrador.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>Gestionar miles de datos por segundo en tiempo real requiere un uso inteligente de la RAM:</p>
                <div class="accordion shadow-sm" id="monMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTSDB">
                                1. TSDB e Ingesta en Caliente
                            </button>
                        </h2>
                        <div id="collapseTSDB" class="accordion-collapse collapse show" data-bs-parent="#monMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Time Series Memory:</strong> Los datos de métricas se almacenan primero en un buffer de RAM.</li>
                                    <li><strong>Escritura Masiva:</strong> Una vez procesados, se guardan en el disco de forma agregada para optimizar el I/O del sistema.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlerts">
                                2. Caché de Lógica y Alertas
                            </button>
                        </h2>
                        <div id="collapseAlerts" class="accordion-collapse collapse" data-bs-parent="#monMemAccordion">
                            <div class="accordion-body">
                                Mantiene en RAM las reglas de disparo (ej: "Si RAM > 90% por 5 min, avisar"). Esto permite comparar cada dato entrante instantáneamente sin consultar la base de datos constantemente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStorm">
                                3. Gestión de "Tormentas de Alertas"
                            </button>
                        </h2>
                        <div id="collapseStorm" class="accordion-collapse collapse" data-bs-parent="#monMemAccordion">
                            <div class="accordion-body">
                                Durante una caída general, el servidor usa colas de prioridad en RAM para asegurar que las alertas críticas lleguen primero, sacrificando temporalmente la visualización de métricas estadísticas.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Observabilidad</h3>
                <img src="https://www.e-dea.co/hs-fs/hubfs/OBSERVABILITY.png" style="width: 75%; height: auto;" alt="Esquema de Observabilidad">
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bh6JxWJOvq0?si=8qFb3CIlVSIzxUOi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-danger mb-4 shadow">
                <div class="card-header bg-danger text-white text-center fw-bold">Métricas Clave (KPIs)</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-speedometer2 fs-4 text-danger"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Uptime %</h6>
                            <p class="small text-muted mb-0">Tiempo total de servicio activo.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-clock-fill fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">MTTR</h6>
                            <p class="small text-muted mb-0">Tiempo medio de reparación.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-hdd-network fs-4 text-info"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Latency</h6>
                            <p class="small text-muted mb-0">Retraso en la respuesta de red.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Software Estrella</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-success">Zabbix / Nagios</h6>
                            <p class="mb-0 x-small text-muted">Veteranos potentes para infraestructura clásica.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-warning">Grafana + Prometheus</h6>
                            <h6 class="mb-0 x-small text-muted">El estándar moderno para contenedores y visualización.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-primary">PRTG Network Monitor</h6>
                            <p class="mb-0 x-small text-muted">Excelente visualización de mapas de red.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-dark text-white mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-megaphone me-2"></i>Alert Fatigue</h6>
                    <p class="x-small mb-0 opacity-75">Demasiadas alertas irrelevantes hacen que el humano ignore las críticas. Un buen servidor de monitoreo debe filtrar el "ruido".</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>