<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidores de Juegos <small class="text-muted">(Game Servers)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-danger fw-bold">El Motor Detrás de la Experiencia Multijugador.</p>
                <p>Un Servidor de Juegos es el centro de autoridad en una partida multijugador. Su función es procesar las acciones de todos los jugadores, validar que sean legales y retransmitir el estado resultante para que todos vean lo mismo al mismo tiempo.</p>
                <div class="card bg-dark text-white border-0 p-4 mb-4 shadow rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-controller fs-1 me-4 text-danger"></i>
                        <div>
                            <p class="mb-0 fw-bold">Autoridad Central</p>
                            <p class="mb-0 small opacity-75">El servidor decide qué sucede realmente. Si tu cliente dice que disparaste pero el servidor dice que ya estabas muerto, el servidor tiene la última palabra.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Arquitecturas de Conexión</h3>
                <p>Existen dos formas principales en las que se gestionan las partidas multijugador:</p>
                <div class="row g-4 mt-1">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold"><i class="bi bi-cpu me-2 text-danger"></i>Servidor Dedicado</h6>
                                <p class="small text-muted mb-0">Una máquina que solo ejecuta la lógica del juego. Es la opción más profesional y estable, usada en juegos de gran escala como Minecraft o CS:GO.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold"><i class="bi bi-person-video3 me-2 text-danger"></i>Listen Server (Host)</h6>
                                <p class="small text-muted mb-0">Uno de los jugadores actúa como servidor y jugador simultáneamente. Más económico, pero vulnerable a la latencia del host.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. El Latido del Juego: Tick Rate</h3>
                <p>El "Tick" es la unidad de tiempo mínima del servidor. El <strong>Tick Rate</strong> es cuántas veces el servidor procesa la lógica por segundo (Hertz):</p>
                <div class="p-4 border rounded bg-white shadow-sm mb-4 text-center">
                    <div class="row">
                        <div class="col-6 border-end">
                            <h2 class="text-secondary fw-bold">64 Hz</h2>
                            <p class="small text-muted mb-0 text-uppercase">Estándar Casual</p>
                        </div>
                        <div class="col-6">
                            <h2 class="text-danger fw-bold">128 Hz</h2>
                            <p class="small text-muted mb-0 text-uppercase">Nivel Competitivo</p>
                        </div>
                    </div>
                    <p class="mt-3 small text-muted">A mayor Tick Rate, el servidor detecta los disparos y movimientos con mayor precisión quirúrgica.</p>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-danger border-danger shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-lightning-fill me-2"></i>Sugerencia Técnica: El Netcode</h4>
                    <p class="small mb-2">Para compensar el <strong>Ping</strong>, los servidores modernos utilizan la <strong>Predicción del Cliente</strong>. El servidor "predice" hacia dónde te mueves para que no sientas retraso.</p>
                    <hr>
                    <p class="small mb-0">Si hay una discrepancia, ocurre el <em>"Rubberbanding"</em> (el famoso efecto de teletransporte o rebote).</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>A diferencia de una web, un juego necesita acceso instantáneo a datos que cambian miles de veces por minuto:</p>
                <div class="accordion shadow-sm" id="gameMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEntities">
                                1. Gestión de Entidades y Mundo
                            </button>
                        </h2>
                        <div id="collapseEntities" class="accordion-collapse collapse show" data-bs-parent="#gameMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Pre-allocation:</strong> El servidor reserva bloques de RAM al arrancar para evitar el "Garbage Collection" durante la partida, lo que causaría picos de lag.</li>
                                    <li><strong>Caché de Colisiones:</strong> Mallas de impacto guardadas en memoria de acceso rápido para validar disparos instantáneamente.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSnapshot">
                                2. Snapshotting (Rebobinación)
                            </button>
                        </h2>
                        <div id="collapseSnapshot" class="accordion-collapse collapse" data-bs-parent="#gameMemAccordion">
                            <div class="accordion-body">
                                El servidor guarda "fotos" del estado del juego de los últimos milisegundos. Cuando disparas, el servidor mira en RAM dónde estaba el enemigo hace 50ms (según tu lag) para validar si acertaste.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreading">
                                3. Multithreading por Zonas
                            </button>
                        </h2>
                        <div id="collapseThreading" class="accordion-collapse collapse" data-bs-parent="#gameMemAccordion">
                            <div class="accordion-body">
                                En mundos abiertos, el servidor divide el mapa por zonas en la RAM. Cada zona corre en un hilo distinto; el desafío es pasar tus datos de un hilo a otro al cruzar una frontera sin corromper tu inventario.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Infraestructura</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-diagram-3 display-1 text-danger mb-3"></i>
                    <h5>Flujo de Autoridad Competitiva</h5>
                    <p class="text-muted small">Representación del ciclo: Entrada del Cliente <i class="bi bi-arrow-right"></i> Procesamiento <i class="bi bi-arrow-right"></i> Estado Global.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona un Servidor de Juegos</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/evzsq7X862Q?si=PL5xXkJ3IZVLSsdy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-danger mb-4 shadow">
                <div class="card-header bg-danger text-white">Conceptos Críticos</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger bg-opacity-10 p-2 rounded me-3 text-danger">
                            <i class="bi bi-reception-4 fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Latencia (Ping)</h6>
                            <p class="small text-muted mb-0">El tiempo de viaje de los datos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning bg-opacity-10 p-2 rounded me-3 text-warning">
                            <i class="bi bi-activity fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Jitter</h6>
                            <p class="small text-muted mb-0">Variación instable del ping.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Hit Registration</h6>
                            <p class="small text-muted mb-0">Precisión en la detección de impactos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white">Motores de Servidor</div>
                <div class="card-body small">
                    <p class="mb-2"><strong>Valve Dedicated Server (SRCDS)</strong></p>
                    <p class="mb-2"><strong>Unreal Engine Server</strong></p>
                    <p class="mb-2"><strong>Unity Game Server Hosting</strong></p>
                    <p class="mb-0"><strong>Amazon GameLift</strong></p>
                </div>
            </div>

            <div class="card border-secondary mb-4 shadow-sm">
                <div class="card-header bg-secondary text-white">Técnicas de Optimización</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item">Entitity Interpolation (Interpolación)</li>
                    <li class="list-group-item">Delta Compression (Cifrado Delta)</li>
                    <li class="list-group-item">Lag Compensation (Rebobinado)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>

