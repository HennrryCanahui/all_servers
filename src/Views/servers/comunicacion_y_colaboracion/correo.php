<?php include __DIR__ . '/../../layouts/header.php'; ?>



<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Correo <small class="text-muted">(Mail Server)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor de Correo es una aplicación informática que gestiona el envío, la recepción y el almacenamiento de mensajes electrónicos, funcionando como un sistema de postal digital.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm border-start border-primary border-4">
                    <p class="mb-0">A diferencia de un chat, el correo utiliza un modelo de <strong>"almacenamiento y reenvío"</strong>: el servidor guarda el mensaje en el buzón hasta que el destinatario decide consultarlo.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Los Tres Protocolos Esenciales</h3>
                <p>El correo depende de un equipo de protocolos especializados para cada etapa de su viaje:</p>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <div class="card-body">
                                <i class="bi bi-send-fill text-primary display-6 mb-3"></i>
                                <h5>SMTP</h5>
                                <p class="small text-muted">Protocolo de envío. Mueve el correo entre dispositivos y servidores del mundo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <div class="card-body">
                                <i class="bi bi-mailbox2 text-success display-6 mb-3"></i>
                                <h5>IMAP</h5>
                                <p class="small text-muted">Estándar moderno. Los correos se sincronizan permanentemente en el servidor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm text-center p-3">
                            <div class="card-body">
                                <i class="bi bi-download text-warning display-6 mb-3"></i>
                                <h5>POP3</h5>
                                <p class="small text-muted">Método antiguo. Descarga y borra del servidor. Útil para poco espacio en nube.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1557200134-90327ee9fafa?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Infraestructura de Correo">
                    <p class="text-muted small mt-2">Diagrama conceptual de la travesía de un correo electrónico</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Componentes del Ecosistema</h3>
                <div class="list-group shadow-sm border-0">
                    <div class="list-group-item d-flex justify-content-between align-items-start p-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">MTA (Mail Transfer Agent)</div>
                            <span class="small text-muted">El servidor que transporta el correo (ej. Postfix, Exim).</span>
                        </div>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start p-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">MDA (Mail Delivery Agent)</div>
                            <span class="small text-muted">Encargado de dejar el mensaje en la carpeta del usuario (ej. Dovecot).</span>
                        </div>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-start p-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Webmail</div>
                            <span class="small text-muted">Interfaz visual en navegador para gestionar correos (ej. Outlook, Roundcube).</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Administración de Memoria: Seguridad y Búsqueda</h3>
                <div class="accordion shadow-sm" id="mailAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecurity">
                                Escaneo Antivirus y Antispam
                            </button>
                        </h2>
                        <div id="collapseSecurity" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                El servidor analiza patrones y virus en la RAM antes de tocar el disco. Mantener bases de datos de huellas maliciosas en memoria (como SpamAssassin) requiere recursos considerables para evitar latencias.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndexing">
                                Indexación (IMAP) y Buffers
                            </button>
                        </h2>
                        <div id="collapseIndexing" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Para buscar en buzones masivos de 50GB+, el servidor usa índices en RAM. Además, utiliza <strong>Buffers de Escritura</strong> para retener adjuntos pesados antes de volcarlos al disco, optimizando I/O.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Configuración de MTA Postfix</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/Sshz-8XpS8U"
                        title="Mail Server Setup"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white"><i class="bi bi-shield-check"></i> Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>Seguridad Obligatoria</h6>
                    <p class="small">Para no caer en SPAM, es vital configurar:</p>
                    <ul class="small mb-0">
                        <li><strong>SPF:</strong> IPs autorizadas para tu dominio.</li>
                        <li><strong>DKIM:</strong> Firma digital del mensaje.</li>
                        <li><strong>DMARC:</strong> Instrucciones en caso de fallo.</li>
                    </ul>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-white">Monitoreo de Recursos</div>
                <div class="card-body small p-3">
                    <p class="mb-1"><strong>CPU:</strong> Alta carga durante escaneo de firmas.</p>
                    <p class="mb-1"><strong>RAM:</strong> Conexiones persistentes IMAP.</p>
                    <p class="mb-0"><strong>I/O:</strong> Escritura masiva de adjuntos.</p>
                </div>
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
