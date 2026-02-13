<?php include __DIR__ . '/../../layouts/header.php'; ?>



<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Groupware <small class="text-muted">(Collaboration Hub)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor Groupware es una plataforma diseñada para que múltiples usuarios trabajen juntos en un entorno común, compartiendo recursos y coordinando tareas en tiempo real.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm border-start border-info border-4">
                    <p class="mb-0">Es el centro de mando que integra comunicación y productividad, permitiendo que el flujo de trabajo de una organización sea centralizado y eficiente.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Los 4 Pilares de la Colaboración</h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-white h-100">
                            <i class="bi bi-chat-dots-fill text-primary display-6 me-3"></i>
                            <div>
                                <h6 class="mb-1">Comunicación</h6>
                                <p class="small text-muted mb-0">Correo electrónico (SMTP/IMAP) y Mensajería Instantánea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-white h-100">
                            <i class="bi bi-calendar-event-fill text-danger display-6 me-3"></i>
                            <div>
                                <h6 class="mb-1">Calendarios</h6>
                                <p class="small text-muted mb-0">Gestión de agendas, reserva de salas y recordatorios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-white h-100">
                            <i class="bi bi-people-fill text-success display-6 me-3"></i>
                            <div>
                                <h6 class="mb-1">Contactos</h6>
                                <p class="small text-muted mb-0">Directorio centralizado (LDAP/Active Directory).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-white h-100">
                            <i class="bi bi-file-earmark-diff-fill text-warning display-6 me-3"></i>
                            <div>
                                <h6 class="mb-1">Documentación</h6>
                                <p class="small text-muted mb-0">Almacenamiento y edición colaborativa en tiempo real.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Colaboración en Equipo">
                    <p class="text-muted small mt-2">Diagrama de interacción en un ecosistema de trabajo colaborativo</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Soluciones de Software</h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center p-2">
                            <div class="card-body">
                                <h6 class="text-primary">MS Exchange</h6>
                                <p class="small text-muted mb-0">Estándar corporativo mediante Outlook.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center p-2">
                            <div class="card-body">
                                <h6 class="text-success">Zimbra</h6>
                                <p class="small text-muted mb-0">Potente alternativa Open Source.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center p-2">
                            <div class="card-body">
                                <h6 class="text-dark">Nextcloud</h6>
                                <p class="small text-muted mb-0">Privacidad y archivos colaborativos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center p-2">
                            <div class="card-body">
                                <h6 class="text-info">Google Sw</h6>
                                <p class="small text-muted mb-0">SaaS líder en colaboración nube.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Administración de Memoria: El Reto de la Omnipresencia</h3>
                <div class="accordion shadow-sm" id="groupwareAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCache">
                                Caché de Sesión Multidimensional
                            </button>
                        </h2>
                        <div id="collapseCache" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                El servidor guarda en RAM el estado del correo, la presencia y las agendas de cada usuario. Administrar miles de pequeños objetos actualizados constantemente requiere un sistema de caché altamente eficiente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLocking">
                                Coordinación de Bloqueos (Locking)
                            </button>
                        </h2>
                        <div id="collapseLocking" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Durante la edición concurrente de documentos o reserva de salas, el servidor usa la RAM para gestionar quién tiene el control del recurso, evitando conflictos de sobrescritura de forma instantánea.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndex">
                                Indexación de Búsqueda Global
                            </button>
                        </h2>
                        <div id="collapseIndex" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Motores como Solr o Elasticsearch consumen gran parte de la RAM para mantener índices listos, permitiendo que la búsqueda entre correos, archivos y tareas devuelva resultados en menos de un segundo.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Colaboración en Tiempo Real</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/5UfB7m0i9Xk"
                        title="Groupware Collaboration Tutorial"
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
                <div class="card-header bg-primary text-white"><i class="bi bi-sync"></i> Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>Protocolos de Sincronización</h6>
                    <p class="small">Implementa <strong>Microsoft Exchange ActiveSync (EAS)</strong> o estándares abiertos como <strong>CalDAV/CardDAV</strong>. Permiten la sincronización "Push" total para mantener a todo el equipo alineado en segundos.</p>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-white">Ventajas del Groupware</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item">Reducción de duplicidad de datos.</li>
                    <li class="list-group-item">Mejora en la comunicación interna.</li>
                    <li class="list-group-item">Centralización de la toma de decisiones.</li>
                    <li class="list-group-item">Seguridad de datos compartidos.</li>
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
