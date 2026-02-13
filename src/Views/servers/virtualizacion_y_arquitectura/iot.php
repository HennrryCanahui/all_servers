<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor IoT <small class="text-muted">(Internet of Things)</small></h1>
            
            <section class="mb-5">
                <header class="mb-4">
                    <h3 class="fw-bold text-dark">Servidor IoT</h3>
                    <p class="lead text-secondary fw-semibold mb-0">
                        El cerebro de los objetos conectados.
                    </p>
                </header>

                <p class="text-muted">
                    Un <strong>Servidor IoT</strong> es la plataforma central encargada de 
                    recibir, procesar y almacenar los datos provenientes de miles de sensores. 
                    Actúa como puente entre el mundo físico 
                    (sensores, cámaras y sistemas domóticos) 
                    y las aplicaciones de usuario final.
                </p>

                <div class="card bg-dark text-white border-0 p-4 mt-4 shadow-lg rounded-4 position-relative overflow-hidden">

                    <!-- Icono decorativo de fondo -->
                    <div class="position-absolute top-50 start-50 translate-middle opacity-25">
                        <i class="bi bi-cpu display-1"></i>
                    </div>

                    <!-- Contenido principal -->
                    <div class="position-relative">
                        <h5 class="fw-bold text-info mb-2">
                            <i class="bi bi-diagram-3 me-2"></i>
                            Interconexión Masiva
                        </h5>

                        <p class="mb-0 small text-light opacity-75">
                            Gestiona flujos constantes de telemetría provenientes de dispositivos
                            con recursos limitados de batería, almacenamiento y conectividad.
                        </p>
                    </div>
                </div>
            </section>


            <section class="mb-5">
                <h3>1. El Lenguaje de las "Cosas"</h3>
                <p>A diferencia de la web tradicional, el IoT utiliza protocolos ultra-ligeros diseñados para redes inestables:</p>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <h6 class="fw-bold text-primary mb-1">MQTT <small>(Pub/Sub)</small></h6>
                            <p class="small text-muted mb-0">El estándar de oro. Ideal para dispositivos que "publican" datos y "suscriptores" que los reciben vía un broker central.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <h6 class="fw-bold text-success mb-1">CoAP</h6>
                            <p class="small text-muted mb-0">Similar al HTTP pero optimizado para dispositivos binarios con recursos mínimos (UDP).</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Tipos de Infraestructura IoT</h3>
                <p>La gestión puede ser global en la nube o local para mayor privacidad:</p>
                <div class="list-group shadow-sm border rounded mb-4">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 fw-bold">Cloud IoT Core</h6>
                            <p class="x-small text-muted mb-0">Plataformas masivas como AWS o Google Cloud.</p>
                        </div>
                        <span class="badge bg-primary rounded-pill">Escala Global</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center bg-light">
                        <div>
                            <h6 class="mb-0 fw-bold">IoT Gateways</h6>
                            <h6 class="x-small text-muted mb-0">Traductores locales (Bluetooth/Zigbee a Nube).</h6>
                        </div>
                        <span class="badge bg-info text-dark rounded-pill">Traducción</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 fw-bold">Open Source (Home Assistant)</h6>
                            <p class="x-small text-muted mb-0">Control local absoluto y privacidad total.</p>
                        </div>
                        <span class="badge bg-secondary rounded-pill">Domótica</span>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-dark border-secondary shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-shield-lock-fill me-2 text-warning"></i>Sugerencia Técnica: Certificados X.509</h4>
                    <p class="small mb-2">Abandona las contraseñas en IoT. Como los dispositivos están expuestos físicamente, la mejor práctica es usar <strong>Identidades Digitales Únicas</strong> mediante certificados certificados grabados en el hardware.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">El servidor valida el certificado antes de aceptar cualquier dato, evitando suplantaciones de sensores.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>El servidor debe malabarear entre miles de conexiones y mensajes mínimos:</p>
                <div class="accordion shadow-sm" id="iotMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSessions">
                                1. Estados de Sesión y Keep-Alive
                            </button>
                        </h2>
                        <div id="collapseSessions" class="accordion-collapse collapse show" data-bs-parent="#iotMemAccordion">
                            <div class="accordion-body">
                                Reserva RAM para recordar qué "tópicos" escucha cada sensor. Una mala gestión puede agotar la memoria simplemente manteniendo las miles de conexiones abiertas inactivas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShadow">
                                2. Device Shadowing (Sombras de Memoria)
                            </button>
                        </h2>
                        <div id="collapseShadow" class="accordion-collapse collapse" data-bs-parent="#iotMemAccordion">
                            <div class="accordion-body">
                                Como los sensores suelen "dormir" para ahorrar batería, el servidor guarda en RAM el <strong>Último Estado Conocido</strong>. Al consultar una bombilla apagada, el servidor responde desde su memoria sin esperar a que esta despierte.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRules">
                                3. Motores de Reglas en RAM
                            </button>
                        </h2>
                        <div id="collapseRules" class="accordion-collapse collapse" data-bs-parent="#iotMemAccordion">
                            <div class="accordion-body">
                                Las reglas lógicas ("Si temp > 30, encender fan") se precargan en RAM para un procesamiento instantáneo, evitando consultas a base de datos que añadirían latencia peligrosa.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Ecosistema IoT</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-bounding-box-circles display-1 text-dark mb-3"></i>
                    <h5>Arquitectura de Sensores a Nube</h5>
                    <p class="text-muted small">Representación del flujo: Cosas <i class="bi bi-arrow-right"></i> Gateway <i class="bi bi-arrow-right"></i> Servidor Central.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona un Servidor IoT</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="IoT Server Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-dark mb-4 shadow">
                <div class="card-header bg-dark text-white text-center fw-bold">Métricas de Red</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-secondary bg-opacity-10 p-2 rounded me-3 text-dark">
                            <i class="bi bi-envelope-paper-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Overhead Mínimo</h6>
                            <p class="small text-muted mb-0">Mensajes de pocos bytes.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded me-3 text-primary">
                            <i class="bi bi-cloud-check-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">QoS (Quality of Service)</h6>
                            <p class="small text-muted mb-0">Garantía de entrega en redes.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-info bg-opacity-10 p-2 rounded me-3 text-info">
                            <i class="bi bi-lightning-charge-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Baja Potencia</h6>
                            <p class="small text-muted mb-0">Optimizado para LPWAN.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white text-center">Protocolos de Radio</div>
                <div class="card-body small p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Zigbee / Z-Wave</li>
                        <li class="list-group-item">LoRaWAN (Larga distancia)</li>
                        <li class="list-group-item">Bluetooth Low Energy (BLE)</li>
                        <li class="list-group-item">NB-IoT / LTE-M</li>
                    </ul>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark text-center fw-bold">Casos de Uso</div>
                <div class="card-body small">
                    <p class="mb-1"><strong>Smart Home:</strong> Luces, termostatos y cámaras.</p>
                    <hr class="my-2">
                    <p class="mb-1"><strong>Smart City:</strong> Sensores de tráfico y alumbrado.</p>
                    <hr class="my-2">
                    <p class="mb-0"><strong>Agricultura:</strong> Humedad y clima de cultivos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>