<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor SIP <small class="text-muted">(VoIP Signalization)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor SIP es el componente principal de una red de Voz sobre IP (VoIP). Actúa como un maestro de ceremonias: establece, modifica y finaliza las comunicaciones en tiempo real.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm border-start border-warning border-4">
                    <p class="mb-0">A diferencia de otros servidores, el SIP no "transporta" la voz; su misión es <strong>conectar a los interlocutores</strong> y negociar las condiciones de la llamada antes de que el audio fluya.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. ¿Cómo funciona la "Magia" del SIP?</h3>
                <p>El protocolo SIP gestiona la señalización, permitiendo que los dispositivos se encuentren y acuerden cómo hablar:</p>
                <div class="card border-0 bg-white shadow-sm p-4 mb-4">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3"><i class="bi bi-person-badge text-primary me-2"></i> <strong>Registro:</strong> El teléfono informa su extensión e IP actual al servidor.</li>
                        <li class="mb-3"><i class="bi bi-envelope-check text-success me-2"></i> <strong>Invitación:</strong> El servidor localiza al destinatario y le envía la petición de llamada.</li>
                        <li class="mb-3"><i class="bi bi-gear-wide-connected text-secondary me-2"></i> <strong>Negociación:</strong> Se acuerdan los Códecs (calidad de audio) para la sesión.</li>
                        <li class="mb-0"><i class="bi bi-phone-vibrate text-danger me-2"></i> <strong>Transferencia:</strong> Una vez establecida, la voz viaja vía <strong>RTP</strong> directamente entre teléfonos.</li>
                    </ul>
                </div>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Infraestructura VoIP">
                    <p class="text-muted small mt-2">Diagrama de flujo de señalización SIP y flujo de medios RTP</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Tipos de Servidores SIP</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100 shadow-sm">
                            <h5 class="h6">SIP Proxy & Registrar</h5>
                            <p class="small text-muted mb-0">Encaminan peticiones y mantienen el control de la ubicación de cada extensión en la red.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100 shadow-sm">
                            <h5 class="h6">PBX IP (Asterisk/3CX)</h5>
                            <p class="small text-muted mb-0">Centralitas completas con IVR (menús), buzones de voz, colas y transferencias avanzadas.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Administración de Memoria: El Corazón del Tiempo Real</h3>
                <div class="accordion shadow-sm" id="sipAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseState">
                                Tablas de Estado y User Location
                            </button>
                        </h2>
                        <div id="collapseState" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <strong>Transaction State:</strong> Por cada intento de llamada, el servidor reserva RAM para rastrear la invitación. <strong>User Location:</strong> Las IPs de las extensiones viven en memoria para que el teléfono suene al instante sin consultar disco.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJitter">
                                Jitter Buffers y Procesamiento
                            </button>
                        </h2>
                        <div id="collapseJitter" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Cuando el audio pasa por el servidor (conferencias/grabación), se crean <strong>Jitter Buffers</strong> en la RAM para reordenar paquetes y evitar que la voz suene robótica debido a la inestabilidad de Internet.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreads">
                                Pools de Hilos de Señalización
                            </button>
                        </h2>
                        <div id="collapseThreads" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                El servidor mantiene hilos en RAM listos para procesar mensajes (INVITE, BYE). Esto mantiene la latencia de establecimiento bajo los 100ms, evitando retrasos al marcar.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Introducción a SIP y Asterisk</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/j_8j6S_zN_Y"
                        title="SIP Protocol Explained"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card border-danger mb-4 shadow">
                <div class="card-header bg-danger text-white"><i class="bi bi-shield-lock"></i> Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>El Reto del NAT</h6>
                    <p class="small">Usa servidores <strong>STUN/TURN</strong> para que el audio atraviese los firewalls domésticos. Sin esto, es común el error de "llamada establecida sin audio".</p>
                    <div class="alert alert-warning py-2 small mb-0">
                        <i class="bi bi-exclamation-triangle"></i> Vital para usuarios remotos.
                    </div>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-white">Métricas de Calidad (QoS)</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><strong>Latencia:</strong> Debe ser < 150ms.</li>
                    <li class="list-group-item"><strong>Jitter:</strong> Variación de retardo (< 30ms).</li>
                    <li class="list-group-item"><strong>Packet Loss:</strong> Pérdida crítica (< 1%).</li>
                </ul>
            </div>

            <div class="d-grid gap-2">
                <a href="javascript:history.back()" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Volver a la lista
                </a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
