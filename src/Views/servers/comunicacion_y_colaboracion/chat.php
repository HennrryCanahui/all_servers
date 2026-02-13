<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Chat <small class="text-muted">(Real-Time Messaging)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor de Chat es una infraestructura diseñada para facilitar el intercambio de mensajes entre usuarios con un retraso casi inexistente, utilizando el modelo de "empuje" (push) de información.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm border-start border-success border-4">
                    <p class="mb-0">A diferencia de la web tradicional, aquí el servidor no solo responde a peticiones, sino que <strong>empuja los datos al cliente</strong> en el instante en que ocurren, garantizando la inmediatez.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. El Cambio de Paradigma: WebSockets</h3>
                <p>Para lograr la mensajería instantánea real, los servidores han evolucionado más allá del HTTP convencional:</p>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100 shadow-sm">
                            <h5 class="text-danger"><i class="bi bi-x-circle"></i> HTTP (Pooling)</h5>
                            <p class="small text-muted">El cliente pregunta recurrentemente si hay mensajes. Es ineficiente y satura la red.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100 shadow-sm">
                            <h5 class="text-success"><i class="bi bi-check-circle"></i> WebSockets</h5>
                            <p class="small text-muted">Tubería de comunicación bidireccional permanente. Datos fluyen libremente en ambos sentidos.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1611746872915-64382b5c76da?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Mensajería en Tiempo Real">
                    <p class="text-muted small mt-2">Visualización de flujos de comunicación masiva bidireccional</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Arquitecturas y Protocolos Clave</h3>
                <div class="accordion shadow-sm" id="chatProtocols">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXMPP">
                                XMPP & Matrix (Estándares Abiertos)
                            </button>
                        </h2>
                        <div id="collapseXMPP" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <strong>XMPP:</strong> El clásico descentralizado (base original de WhatsApp). <strong>Matrix:</strong> El estándar moderno para mensajería federada con cifrado de extremo a extremo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMQTT">
                                MQTT & IRC
                            </button>
                        </h2>
                        <div id="collapseMQTT" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>MQTT:</strong> Ideal para móviles por su bajo consumo de batería. <strong>IRC:</strong> La base histórica de los canales de chat técnicos.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Administración de Memoria: El Reto de las Conexiones</h3>
                <p>A diferencia de otros servidores, el chat maneja millones de conexiones persistentes (sockets) que consumen RAM constante.</p>
                <div class="card border-0 bg-dark text-light p-4 mb-4 shadow">
                    <h6><i class="bi bi-cpu text-info"></i> Gestión de "Fan-out" y Caching</h6>
                    <ul class="small mb-0 mt-2">
                        <li><strong>Footprint:</strong> Cada socket abierto consume entre 4KB y 10KB. 1 millón de usuarios = ~10GB de RAM solo en estado de sesión TCP.</li>
                        <li><strong>Caché de Historial:</strong> Los últimos 50 mensajes de cada chat se mantienen en <strong>Redis (RAM)</strong> para acceso instantáneo.</li>
                        <li><strong>Fan-out:</strong> Distribuir un mensaje grupal clona los datos en memoria para cada destinatario en milisegundos.</li>
                    </ul>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona Socket.io</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/ZKEqqIO7nLS"
                        title="Real-time with Socket.io"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card border-info mb-4 shadow">
                <div class="card-header bg-info text-white"><i class="bi bi-broadcast"></i> Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>Servidor de Presencia</h6>
                    <p class="small">Gestionar estados (En línea, Escribiendo...) requiere un sistema de <strong>Pub/Sub</strong> optimizado. Es la parte que más recursos consume al escalar.</p>
                    <div class="alert alert-info py-2 small mb-0">
                        <i class="bi bi-lightning"></i> Usa microservicios dedicados solo para presencia.
                    </div>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Componentes Críticos</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><strong>Load Balancers:</strong> Deben soportar <em>sticky sessions</em> para WebSockets.</li>
                    <li class="list-group-item"><strong>Bases de Datos:</strong> NoSQL (como Cassandra o MongoDB) para logs masivos de mensajes.</li>
                    <li class="list-group-item"><strong>Seguridad:</strong> TLS obligatorio para evitar el sniffing de mensajes en tránsito.</li>
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
