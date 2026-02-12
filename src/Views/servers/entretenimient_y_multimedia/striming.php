<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Streaming <small class="text-muted">(Distribución Multimedia)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">La Fábrica de Contenido Bajo Demanda.</p>
                <p>Un Servidor de Streaming es una infraestructura diseñada para entregar archivos de audio o video de forma continua y fragmentada. A diferencia de una descarga tradicional, el streaming permite la reproducción inmediata mientras los datos siguen viajando por la red.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-broadcast fs-1 me-4 text-primary"></i>
                        <div>
                            <p class="mb-0 fw-bold">Entrega Fragmentada</p>
                            <p class="mb-0 small opacity-75">El contenido se divide en segmentos de pocos segundos para garantizar una reproducción fluida sin esperar la descarga completa.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Funcionamiento y Protocolos</h3>
                <p>El servidor gestiona la entrega del video mediante protocolos especializados que fragmentan el archivo:</p>
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-start border-4 border-info">
                            <div class="card-body">
                                <h6 class="fw-bold">HLS <small class="text-muted">(Apple)</small></h6>
                                <p class="small text-muted mb-0">El más compatible. Divide el video en archivos <code>.ts</code> y utiliza listas <code>.m3u8</code>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-start border-4 border-primary">
                            <div class="card-body">
                                <h6 class="fw-bold">MPEG-DASH</h6>
                                <p class="small text-muted mb-0">Estándar abierto flexible. Ideal para múltiples formatos de codificación y Bitrate Adaptativo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark text-white p-3 mb-4 rounded-3">
                    <p class="mb-0 small"><i class="bi bi-lightning-fill text-warning me-2"></i><strong>RTMP:</strong> Utilizado para la <em>subida</em> de video en vivo (Live Ingest) por su bajísima latencia.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Bitrate Adaptativo (ABR)</h3>
                <p>El servidor realiza la <strong>transcodificación</strong>, creando múltiples versiones de calidad (1080p, 720p, 480p) para una experiencia sin interrupciones:</p>
                <div class="p-4 border rounded bg-white shadow-sm mb-4 text-center">
                    <div class="d-flex justify-content-center align-items-end mb-3" style="height: 60px;">
                        <div class="bg-primary mx-1" style="width: 20px; height: 20%;"></div>
                        <div class="bg-primary mx-1" style="width: 20px; height: 40%;"></div>
                        <div class="bg-primary mx-1" style="width: 20px; height: 70%;"></div>
                        <div class="bg-primary mx-1" style="width: 20px; height: 100%;"></div>
                    </div>
                    <h6 class="fw-bold">Dynamic Adaptive Streaming</h6>
                    <p class="small text-muted px-lg-5">Si tu conexión cae, el servidor cambia automáticamente a un segmento de menor resolución para evitar que el video se detenga.</p>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-info border-info shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-globe me-2"></i>Sugerencia Técnica: El papel de las CDN</h4>
                    <p class="small mb-0">Un servidor de streaming no trabaja solo. Se apoya en una <strong>CDN (Content Delivery Network)</strong> para clonar los segmentos de video en servidores distribuidos por todo el mundo, acercando el contenido al usuario final.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>El reto principal es el movimiento masivo de datos (I/O) y el uso inteligente de la RAM:</p>
                <div class="accordion shadow-sm" id="streamMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCache">
                                1. Caché en Caliente y Pre-fetching
                            </button>
                        </h2>
                        <div id="collapseCache" class="accordion-collapse collapse show" data-bs-parent="#streamMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Segmentos Populares:</strong> Los videos virales se mantienen en RAM (L1/L2 Cache) para una entrega instantánea sin tocar el disco.</li>
                                    <li><strong>Pre-fetching:</strong> El servidor "adivina" qué segmentos pedirás a continuación y los carga en memoria preventivamente.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZeroCopy">
                                2. Zero-Copy Memory Transfer
                            </button>
                        </h2>
                        <div id="collapseZeroCopy" class="accordion-collapse collapse" data-bs-parent="#streamMemAccordion">
                            <div class="accordion-body">
                                Técnica de SO donde los datos pasan del disco a la tarjeta de red a través de la RAM sin intervención de la CPU, permitiendo manejar miles de conexiones simultáneas eficientemente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSessions">
                                3. Gestión de Sesión y Fugas
                            </button>
                        </h2>
                        <div id="collapseSessions" class="accordion-collapse collapse" data-bs-parent="#streamMemAccordion">
                            <div class="accordion-body">
                                Reserva pequeños bloques de RAM para el estado de cada espectador (resolución, progreso). Una liberación inmediata al cerrar la pestaña es vital para evitar <em>Memory Leaks</em>.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Distribución</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-cloud-arrow-down display-1 text-primary mb-3"></i>
                    <h5>Flujo: Origen <i class="bi bi-arrow-right"></i> CDN <i class="bi bi-arrow-right"></i> Usuario</h5>
                    <p class="text-muted small">Representación de la entrega de contenido adaptativo a escala global.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona el Streaming</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Streaming Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white">Conceptos del Streaming</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded me-3 text-primary">
                            <i class="bi bi-collection-play-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">VOD</h6>
                            <p class="small text-muted mb-0">Video on Demand (Plex, Netflix).</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger bg-opacity-10 p-2 rounded me-3 text-danger">
                            <i class="bi bi-record-circle fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Live Streaming</h6>
                            <p class="small text-muted mb-0">Transmisión en vivo (Twitch, YouTube).</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-pip fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Multibitrate</h6>
                            <p class="small text-muted mb-0">Múltiples calidades simultáneas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white">Software de Servidor</div>
                <div class="card-body small">
                    <p class="mb-2"><strong>NGINX RTMP Module</strong></p>
                    <p class="mb-2"><strong>Wowza Streaming Engine</strong></p>
                    <p class="mb-2"><strong>Plex Media Server</strong></p>
                    <p class="mb-0"><strong>FFmpeg</strong> (Transcodificación)</p>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark">Tipos de Archivos</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item">Lista de Reproducción: .m3u8</li>
                    <li class="list-group-item">Segmentos de Video: .ts / .m4s</li>
                    <li class="list-group-item">Manifest: .mpd (DASH)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>