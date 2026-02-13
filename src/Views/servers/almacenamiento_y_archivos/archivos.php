<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Archivos <small class="text-muted">(File Server)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-dark fw-bold">El Almacén Central de Datos.</p>
                <p>Un <strong>Servidor de Archivos</strong> es una computadora responsable de la gestión centralizada de archivos de datos, permitiendo que otros dispositivos en la misma red accedan a ellos de forma segura y eficiente, eliminando la necesidad de mover archivos físicamente.</p>
                <div class="card bg-warning bg-opacity-10 border-warning border-opacity-25 p-4 mb-4 shadow rounded-4 overflow-hidden position-relative">
                    <div class="position-relative text-dark">
                        <p class="mb-0 fw-bold">Recursos Compartidos</p>
                        <p class="mb-0 small opacity-75">Optimiza la colaboración permitiendo el control de versiones, permisos granulares y copias de seguridad centralizadas.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Protocolos de Compartición</h3>
                <p>Para que los archivos se transfieran correctamente, cliente y servidor deben hablar el mismo lenguaje:</p>
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-microsoft text-primary fs-2 mb-2"></i>
                            <h6 class="fw-bold small">SMB / CIFS</h6>
                            <p class="x-small text-muted mb-0">Estándar de Windows. Permite bloqueo de archivos para edición segura.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-ubuntu text-danger fs-2 mb-2"></i>
                            <h6 class="fw-bold small">NFS</h6>
                            <p class="x-small text-muted mb-0">Protocolo de Linux/Unix. Ultra rápido para montar discos remotos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <i class="bi bi-apple text-dark fs-2 mb-2"></i>
                            <h6 class="fw-bold small">AFP</h6>
                            <p class="x-small text-muted mb-0">Protocolo clásico de macOS (en transición hacia SMB).</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Tipos de Hardware de Almacenamiento</h3>
                <div class="list-group shadow-sm rounded border border-0">
                    <div class="list-group-item d-flex align-items-center p-3 border-0 border-bottom">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                            <i class="bi bi-hdd-stack text-primary fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">NAS (Network Attached Storage)</h6>
                            <p class="small text-muted mb-0">Dispositivos dedicados (Synology, QNAP) fáciles de gestionar para PYMES.</p>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center p-3 border-0">
                        <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
                            <i class="bi bi-diagram-2 text-success fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">SAN (Storage Area Network)</h6>
                            <p class="small text-muted mb-0">Red de fibra óptica de alta velocidad para grandes centros de datos y acceso compartido masivo.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-warning border-warning shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-dark"><i class="bi bi-shield-check-fill me-2 text-warning"></i>Sugerencia Técnica: Niveles de RAID</h4>
                    <p class="small mb-3">La seguridad de los datos no puede depender de un solo disco duro. El uso de arreglos redundantes es indispensable:</p>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="p-2 border rounded bg-light small">
                                <strong>RAID 1 (Espejo):</strong> Duplica datos en dos discos simultáneamente.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2 border rounded bg-light small">
                                <strong>RAID 5 (Paridad):</strong> Divide datos en 3 o más discos. Balance ideal costo/seguridad.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>En el almacenamiento, la RAM actúa como un "turbo" para los discos físicos:</p>
                <div class="accordion shadow-sm" id="storageMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCache">
                                1. Page Cache (Caché de Sistema)
                            </button>
                        </h2>
                        <div id="collapseCache" class="accordion-collapse collapse show" data-bs-parent="#storageMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Read-Ahead (Lectura Anticipada):</strong> El servidor predice qué datos pedirás a continuación y los precarga en RAM para acceso instantáneo.</li>
                                    <li><strong>Write-Back (Escritura Diferida):</strong> Confirma el guardado en RAM y escribe en disco segundos después, acelerando el flujo de trabajo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMetadata">
                                2. Metadatos e Índices de Memoria
                            </button>
                        </h2>
                        <div id="collapseMetadata" class="accordion-collapse collapse" data-bs-parent="#storageMemAccordion">
                            <div class="accordion-body">
                                El servidor mantiene en RAM una lista de dónde está cada archivo y quién tiene permisos. Con millones de archivos, la RAM puede saturarse solo gestionando este mapa (metadatos).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNetwork">
                                3. Buffers de Red y Transferencia
                            </button>
                        </h2>
                        <div id="collapseNetwork" class="accordion-collapse collapse" data-bs-parent="#storageMemAccordion">
                            <div class="accordion-body">
                                Reserva bloques de RAM para empaquetar datos antes de enviarlos. Si los buffers son insuficientes, la velocidad de transferencia cae drásticamente aunque la red sea de 10Gbps.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Almacenamiento</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-stack display-1 text-warning mb-3"></i>
                    <h5>Clientes <i class="bi bi-arrow-left-right"></i> Protocolo (SMB/NFS) <i class="bi bi-arrow-left-right"></i> RAID Storage</h5>
                    <p class="text-muted small">Representación de la arquitectura de acceso a datos centralizada.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/a9AT_ycEbas?si=M5fSuH8rorIy1hGl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-warning mb-4 shadow">
                <div class="card-header bg-warning text-dark text-center fw-bold">Gestión de Acceso</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-person-lock fs-4 text-warning"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Permisos ACL</h6>
                            <p class="small text-muted mb-0">Control granular por usuario/grupo.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-clock-history fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Shadow Copy</h6>
                            <p class="small text-muted mb-0">Recuperación de versiones anteriores.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-hdd-fill fs-4 text-success"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Cuotas de Disco</h6>
                            <p class="small text-muted mb-0">Limita el espacio por departamento.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Software Recomendado</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-primary">Truenas / Freenas</h6>
                            <p class="mb-0 x-small text-muted">La solución Open Source más profesional.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-success">Nextcloud</h6>
                            <h6 class="mb-0 x-small text-muted">Tu propia nube privada con interfaz web.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold text-secondary">Windows Server (DFS)</h6>
                            <p class="mb-0 x-small text-muted">Ideal para replicación en entornos AD.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-success text-white mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-battery-charging me-2"></i>Dato Vital: UPS</h6>
                    <p class="x-small mb-0 opacity-75">Si usas <strong>Write-Back</strong>, un sistema de alimentación ininterrumpida (UPS) es obligatorio. Si el servidor se apaga con datos en RAM que no se han escrito en disco, perderás el archivo.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>