<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidores en Cluster <small class="text-muted">(Sistemas Distribuidos)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-success fw-bold">La Unión Hace la Fuerza: Alta Disponibilidad y Rendimiento.</p>
                <p>Un <strong>Cluster de Servidores</strong> es un grupo de múltiples servidores independientes (llamados nodos) que trabajan juntos como si fueran un único sistema. El objetivo es proporcionar mayor potencia de procesamiento, balanceo de carga o, lo más importante, que el servicio nunca se detenga.</p>
                <div class="card bg-success text-white border-0 p-4 mb-4 shadow rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-diagram-3-fill fs-1 me-4"></i>
                        <div>
                            <p class="mb-0 fw-bold">Sin Puntos de Fallo Único</p>
                            <p class="mb-0 small opacity-75">Si un nodo del cluster "muere", los demás detectan la falla y asumen su carga de trabajo instantáneamente.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Tipos de Cluster según el Objetivo</h3>
                <p>No todos los clusters se configuran igual; su diseño depende de lo que se quiera proteger:</p>
                <div class="row g-4 mt-1">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-clock-history text-success fs-2 mb-2"></i>
                                <h6 class="fw-bold">Alta Disponibilidad (HA)</h6>
                                <p class="small text-muted mb-0">Servicio online 99.999%. Failover automático si algo falla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-arrow-left-right text-primary fs-2 mb-2"></i>
                                <h6 class="fw-bold">Balanceo de Carga</h6>
                                <p class="small text-muted mb-0">Distribuye millones de visitas entre múltiples nodos simultáneos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body text-center">
                                <i class="bi bi-cpu text-danger fs-2 mb-2"></i>
                                <h6 class="fw-bold">Alto Rendimiento (HPC)</h6>
                                <p class="small text-muted mb-0">Cálculos masivos realizados en paralelo por todos los nodos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. El Protocolo Heartbeat (Latido)</h3>
                <p>Para que un cluster funcione, los nodos deben comunicarse constantemente para confirmar que están vivos:</p>
                <div class="card bg-dark text-white p-4 mb-4 rounded-3 shadow-lg border-0 overflow-hidden">
                    <div class="position-absolute end-0 top-0 opacity-25 p-3">
                        <i class="bi bi-activity display-1"></i>
                    </div>
                    <div class="position-relative">
                        <p class="mb-2 fw-bold text-success font-monospace">>> SYSTEM HEARTBEAT STATUS:</p>
                        <p class="mb-1 font-monospace small"><span class="text-info">[NODE_01]:</span> ONLINE (Latency 1ms)</p>
                        <p class="mb-1 font-monospace small"><span class="text-info">[NODE_02]:</span> ONLINE (Latency 1ms)</p>
                        <p class="mb-0 font-monospace small"><span class="text-danger">[NODE_03]:</span> CRITICAL - NO HEARTBEAT DETECTED!</p>
                    </div>
                </div>
                <p class="text-muted">Si un nodo deja de enviar su señal, el cluster activa el protocolo de recuperación para que otro asuma sus tareas y dirección IP.</p>
            </section>

            <section class="mb-5">
                <div class="alert alert-success border-success shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-hdd-network me-2"></i>Sugerencia Técnica: Almacenamiento Compartido</h4>
                    <p class="small mb-2">En un cluster profesional, los datos no deben estar en un solo servidor. Se recomienda usar <strong>SAN (Storage Area Network)</strong> o <strong>NAS</strong>.</p>
                    <hr>
                    <p class="small mb-0">De esta forma, todos los nodos ven el mismo disco externo; si el Nodo A falla, el Nodo B sigue operando con los mismos datos.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>El desafío principal es mantener la coherencia de datos entre todos los equipos sincronizados:</p>
                <div class="accordion shadow-sm" id="clusterMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDSM">
                                1. Memoria Compartida Distribuida (DSM)
                            </button>
                        </h2>
                        <div id="collapseDSM" class="accordion-collapse collapse show" data-bs-parent="#clusterMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Pool de Memoria:</strong> El software ve la RAM de todos los nodos como una sola piscina gigante de recursos.</li>
                                    <li><strong>Sincronización de Estado:</strong> Se reserva RAM para tablas de estado replicadas. Si te logueas en el Nodo 1, el Nodo 2 ya lo sabe por memoria compartida.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuorum">
                                2. Quorum de Memoria y Split-Brain
                            </button>
                        </h2>
                        <div id="collapseQuorum" class="accordion-collapse collapse" data-bs-parent="#clusterMemAccordion">
                            <div class="accordion-body">
                                Para evitar que dos nodos crean que son el líder simultáneamente (Split-Brain), el cluster usa un sistema de votación en RAM. Los nodos registran votos para decidir quién toma el control.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCheckpoint">
                                3. Failover y Checkpointing
                            </button>
                        </h2>
                        <div id="collapseCheckpoint" class="accordion-collapse collapse" data-bs-parent="#clusterMemAccordion">
                            <div class="accordion-body">
                                El servidor guarda "fotos" de la RAM de las aplicaciones periódicamente. Si hay fallo, el nuevo nodo carga ese <em>checkpoint</em> desde el disco a su propia RAM para reanudar el trabajo sin pérdida de progreso.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema Técnico de Cluster</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-grid-3x3-gap display-1 text-success mb-3"></i>
                    <h5>Arquitectura N+1</h5>
                    <p class="text-muted small">Representación de múltiples nodos balanceados con almacenamiento centralizado.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Alta Disponibilidad con Clusters</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Cluster Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-success mb-4 shadow">
                <div class="card-header bg-success text-white text-center fw-bold">Pilares del Cluster</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-shield-fill-check fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Redundancia</h6>
                            <p class="small text-muted mb-0">Duplicación de componentes.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-info bg-opacity-10 p-2 rounded me-3 text-info">
                            <i class="bi bi-lightning-charge-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Escalabilidad</h6>
                            <p class="small text-muted mb-0">Añade nodos según crezcas.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-2 rounded me-3 text-dark">
                            <i class="bi bi-gear-wide-connected fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Gestión Única</h6>
                            <p class="small text-muted mb-0">Panel de control centralizado.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white">Software Líder</div>
                <div class="card-body small">
                    <h6 class="fw-bold mb-1">Kubernetes (K8s)</h6>
                    <p class="text-muted">El estándar moderno para clusters de contenedores.</p>
                    <hr>
                    <h6 class="fw-bold mb-1">Proxmox / VMware</h6>
                    <p class="text-muted">Gestión de clusters de virtualización HA.</p>
                    <hr>
                    <h6 class="fw-bold mb-1">Apache Spark</h6>
                    <p class="text-muted">Cluster para procesamiento de Big Data.</p>
                </div>
            </div>

            <div class="card border-danger mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">Escenarios Críticos</div>
                <div class="card-body small p-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">Bancos y Finanzas</li>
                        <li class="list-group-item bg-transparent">E-commerce masivo</li>
                        <li class="list-group-item bg-transparent">Simulaciones Científicas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>