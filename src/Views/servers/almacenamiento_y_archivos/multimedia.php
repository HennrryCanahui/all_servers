<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Multimedia <small class="text-muted">(Streaming & Media Hub)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor Multimedia es una computadora o dispositivo especializado en almacenar y servir archivos de audio, video e imágenes a otros dispositivos en una red (Smart TVs, consolas, móviles).</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm">
                    <p class="mb-0">Su función principal es el <strong>streaming</strong>, permitiendo que el contenido se reproduzca sin necesidad de descargarlo por completo en el cliente, transformando cualquier red local en una central de entretenimiento digital.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Protocolos de Comunicación Multimedia</h3>
                <p>A diferencia de un servidor de archivos común, estos utilizan protocolos optimizados para el flujo de datos continuo:</p>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>DLNA:</strong> El estándar más compatible. Permite comunicación automática entre marcas (Sony, Samsung, LG).</li>
                    <li class="list-group-item"><strong>UPnP:</strong> Facilita que el servidor sea "descubierto" por los reproductores en la red sin configuración manual.</li>
                    <li class="list-group-item"><strong>DASH/HLS:</strong> Utilizados para adaptar la calidad del video a la velocidad de la red en tiempo real.</li>
                </ul>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Ecosistema Multimedia">
                    <p class="text-muted small mt-2">Diagrama conceptual de un ecosistema de servidor multimedia doméstico</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Soluciones de Software Populares</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5><i class="bi bi-play-circle-fill text-primary"></i> Plex</h5>
                                <p class="small">El más popular. Ofrece organización automática de carátulas, metadatos y acceso remoto seguro.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5><i class="bi bi-code-square text-success"></i> Jellyfin</h5>
                                <p class="small">La opción Open Source y gratuita por excelencia, centrada en la privacidad y sin suscripciones.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Gestión de Memoria y Rendimiento</h3>
                <div class="accordion" id="multimediaAccordion">
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBuffering">
                                Buffering de Transmisión (Stream Buffering)
                            </button>
                        </h2>
                        <div id="collapseBuffering" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                El servidor reserva segmentos de la RAM para almacenar los próximos segundos del video. Si el disco tiene un retraso, el usuario no nota nada porque el reproductor lee de la <strong>memoria rápida</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTranscoding">
                                Transcodificación y RAM Disk
                            </button>
                        </h2>
                        <div id="collapseTranscoding" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Usar un <strong>RAM Disk</strong> para archivos temporales de transcodificación reduce el desgaste del SSD/HDD y hace que saltar a diferentes partes del video sea casi instantáneo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVRAM">
                                Memoria de Video (VRAM)
                            </button>
                        </h2>
                        <div id="collapseVRAM" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Al usar transcodificación por hardware (GPU), el servidor delega la carga procesando frames en la <strong>VRAM</strong>, dejando la RAM principal libre para conexiones de red.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo de como crear un servidor multimedia</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/Ppv8uzrwV1o?si=GSHnuzxCno4fqgFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white">Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>Transcodificación por Hardware</h6>
                    <p class="small">En lugar de usar la CPU, activa el uso de la GPU (Intel QuickSync o NVIDIA NVENC). Esto permite procesar varios videos en 4K simultáneamente sin ralentizar el sistema.</p>
                    <div class="alert alert-info py-2 small mb-0">
                        <i class="bi bi-lightbulb"></i> <strong>Tip:</strong> Ideal para redes con dispositivos de diferentes resoluciones.
                    </div>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Componentes Clave</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><strong>Almacenamiento:</strong> HDDs de alta disponibilidad (NAS grade).</li>
                    <li class="list-group-item"><strong>Red:</strong> Conexión Gigabit Ethernet para evitar cuellos de botella.</li>
                    <li class="list-group-item"><strong>Cache L1:</strong> Metadatos cargados en RAM para navegación instantánea.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
