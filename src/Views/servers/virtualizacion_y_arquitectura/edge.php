<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Edge <small class="text-muted">(Computación en el Borde)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-info fw-bold">Procesamiento Instantáneo donde Nacen los Datos.</p>
                <p>Un <strong>Servidor Edge</strong> es un equipo situado físicamente cerca de la fuente de los datos o del usuario final. En lugar de enviar todo a un centro de datos a miles de kilómetros, el Edge resuelve los problemas en el sitio para garantizar una respuesta inmediata.</p>
                <div class="card bg-info bg-opacity-10 border-info border-opacity-25 p-4 mb-4 shadow-sm rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-cpu-fill fs-1 me-4 text-info"></i>
                        <div>
                            <p class="mb-0 fw-bold">Latencia Casi Cero</p>
                            <p class="mb-0 small text-muted">A diferencia de la nube tradicional, el Edge elimina el tiempo de viaje de los datos, permitiendo reacciones en microsegundos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. El Modelo de Proximidad</h3>
                <p>En el modelo de nube tradicional (Cloud Core), los datos viajan largas distancias. En el modelo <strong>Edge</strong>, el procesador está en la "frontera":</p>
                
                <div class="row g-4 mt-1 mb-4 text-center">
                    <div class="col-md-4">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <i class="bi bi-phone text-secondary fs-3 mb-2"></i>
                            <h6 class="fw-bold small">Dispositivo</h6>
                            <p class="mb-0 x-small text-muted">Sensores, Cámaras, Móviles.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded-pill bg-info text-white shadow h-100 d-flex flex-column justify-content-center">
                            <h6 class="fw-bold mb-0">EDGE LAYER</h6>
                            <span class="x-small">Punto Local</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <i class="bi bi-cloud-fill text-primary fs-3 mb-2"></i>
                            <h6 class="fw-bold small">Cloud Core</h6>
                            <p class="mb-0 x-small text-muted">Centro de Datos Central.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Aplicaciones Críticas</h3>
                <p>El Edge Server es indispensable para tecnologías que no pueden esperar ni un milisegundo:</p>
                <ul class="list-group list-group-flush mb-4 shadow-sm border rounded">
                    <li class="list-group-item d-flex align-items-start">
                        <i class="bi bi-car-front-fill me-3 text-danger fs-4"></i>
                        <div>
                            <strong>Vehículos Autónomos:</strong> Procesamiento de sensores para frenado instantáneo.
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-start bg-light">
                        <i class="bi bi-robot me-3 text-warning fs-4"></i>
                        <div>
                            <strong>IoT Industrial:</strong> Monitoreo de maquinaria para detener fallas antes de que ocurran.
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-start">
                        <i class="bi bi-vr me-3 text-primary fs-4"></i>
                        <div>
                            <strong>Realidad Aumentada:</strong> Renderizado inmediato para evitar mareos en el usuario.
                        </div>
                    </li>
                </ul>
            </section>

            <section class="mb-5">
                <div class="alert alert-info border-info shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-filter-circle me-2"></i>Sugerencia Técnica: Cloud Offloading</h4>
                    <p class="small mb-0">El servidor Edge actúa como un <strong>filtro inteligente</strong>: procesa lo urgente localmente y envía solo un resumen a la nube central. Esto optimiza drásticamente los costos de ancho de banda y almacenamiento.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>Debido a que opera en hardware con recursos limitados pero bajo presión extrema, su gestión de RAM es vital:</p>
                <div class="accordion shadow-sm" id="edgeMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInMemory">
                                1. In-Memory Processing y Zero-copy
                            </button>
                        </h2>
                        <div id="collapseInMemory" class="accordion-collapse collapse show" data-bs-parent="#edgeMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Computación In-Memory:</strong> Mantiene toda la base de datos operativa en RAM para evitar el acceso lento al disco SSD/HDD.</li>
                                    <li><strong>Zero-copy:</strong> Los datos de los sensores pasan de la red a la aplicación sin copias intermedias, ahorrando ciclos de CPU críticos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIsolation">
                                2. Aislamiento y Microservicios
                            </button>
                        </h2>
                        <div id="collapseIsolation" class="accordion-collapse collapse" data-bs-parent="#edgeMemAccordion">
                            <div class="accordion-body">
                                Utiliza <strong>WebAssembly</strong> o contenedores ligeros con límites estrictos de RAM. Esto asegura que una tarea de análisis de datos no deje sin memoria a un proceso crítico de seguridad.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrediction">
                                3. Caché de Predicción e IA
                            </button>
                        </h2>
                        <div id="collapsePrediction" class="accordion-collapse collapse" data-bs-parent="#edgeMemAccordion">
                            <div class="accordion-body">
                                Reserva RAM para "modelos de inferencia". Al tener la IA en memoria, el servidor puede predecir eventos y dar respuestas antes de que el dato salga de la red local.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Infraestructura Edge</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-broadcast-pin display-1 text-info mb-3"></i>
                    <h5>El Procesador en la Frontera</h5>
                    <p class="text-muted small">Representación del nodo Edge filtrando datos antes de la Nube.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: ¿Qué es Edge Computing?</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Edge Computing Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-info mb-4 shadow">
                <div class="card-header bg-info text-white text-center fw-bold">Beneficios del Edge</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-info bg-opacity-10 p-2 rounded me-3 text-info">
                            <i class="bi bi-speedometer fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Velocidad</h6>
                            <p class="small text-muted mb-0">Respuesta en milisegundos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-wifi fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Bandwidth</h6>
                            <p class="small text-muted mb-0">Ahorro masivo de datos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-dark bg-opacity-10 p-2 rounded me-3 text-dark">
                            <i class="bi bi-hdd-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Autonomía</h6>
                            <p class="small text-muted mb-0">Funciona sin internet constante.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center">Hardware Edge</div>
                <div class="card-body small">
                    <p class="mb-2 fw-bold">Micro Data Centers</p>
                    <p class="mb-2 fw-bold">Gateways Industriales</p>
                    <p class="mb-2 fw-bold">Torres de Celular 5G</p>
                    <p class="mb-0 fw-bold">Dispositivos Inteligentes</p>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white text-center">Proveedores</div>
                <div class="card-body small p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">AWS Snowball / Wavelength</li>
                        <li class="list-group-item">Azure Stack Edge</li>
                        <li class="list-group-item">Cloudflare Workers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>