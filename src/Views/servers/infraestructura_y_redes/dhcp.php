<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor DHCP <small class="text-muted">(Dynamic Host Configuration Protocol)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">El "Administrador Invisible" de nuestras conexiones.</p>
                <p>El DHCP es un protocolo de red basado en el modelo cliente-servidor que automatiza la configuración de red (direcciones IP, máscara de subred, puerta de enlace) para cada dispositivo que se conecta.</p>
                <div class="card bg-light border-0 p-4 mb-4">
                    <p class="mb-0"><strong>¿Por qué es vital?</strong> Imagina configurar manualmente 500 computadoras en una oficina o cada celular en un café; el DHCP evita este caos asignando recursos de forma dinámica y sin errores humanos.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>El Proceso DORA: ¿Cómo se comunica?</h3>
                <p>La magia ocurre en cuatro pasos rápidos mediante mensajes UDP:</p>
                <div class="row g-4 mt-2">
                    <div class="col-md-3 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-primary mb-2">1. Discovery</span>
                            <p class="small text-muted mb-0">El cliente busca un servidor en la red.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-success mb-2">2. Offer</span>
                            <p class="small text-muted mb-0">El servidor ofrece una IP disponible.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-info text-dark mb-2">3. Request</span>
                            <p class="small text-muted mb-0">El cliente solicita esa IP formalmente.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-warning text-dark mb-2">4. ACK</span>
                            <p class="small text-muted mb-0">El servidor confirma y entrega la configuración.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center my-5">
    
                        <img src="https://tse1.mm.bing.net/th/id/OIP.ttslMrBZywnq3SvD98GfUAHaE3?cb=defcachec2&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Diagrama Técnico de Comunicación DHCP (DORA)">
                    
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria y Direcciones</h3>
                <p>Un servidor DHCP gestiona una base de datos dinámica mediante alquileres temporales conocidos como "Leases".</p>
                <div class="accordion" id="dhcpAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLease">
                                1. Concepto de "Lease" (Concesión)
                            </button>
                        </h2>
                        <div id="collapseLease" class="accordion-collapse collapse show" data-bs-parent="#dhcpAccordion">
                            <div class="accordion-body">
                                La memoria funciona como alquileres. En un café (alta rotación) el tiempo es corto (2h). En oficinas, puede durar días. Esto evita que la RAM se llene de dispositivos desconectados.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCycles">
                                2. Ciclos de Renovación (T1 y T2)
                            </button>
                        </h2>
                        <div id="collapseCycles" class="accordion-collapse collapse" data-bs-parent="#dhcpAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>T1 (50% del tiempo):</strong> El cliente intenta renovar su "contrato".</li>
                                    <li><strong>T2 (87.5% del tiempo):</strong> Si el servidor original falla, el cliente busca cualquier otro servidor disponible.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExhaustion">
                                3. ¿Qué pasa cuando la memoria se agota?
                            </button>
                        </h2>
                        <div id="collapseExhaustion" class="accordion-collapse collapse" data-bs-parent="#dhcpAccordion">
                            <div class="accordion-body">
                                Si el "pool" llega al 100%, los nuevos dispositivos no obtienen internet y aparecen las direcciones <strong>APIPA (169.254.x.x)</strong>, indicando una falla de asignación.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Tutorial</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0T2eA-01w9Y?si=fYTkSTnbkIK_qZSJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Modos de Asignación</div>
                <div class="card-body">
                    <nav class="nav flex-column gap-3">
                        <div>
                            <h6 class="mb-1 fw-bold">Dinámica</h6>
                            <p class="small text-muted mb-0">Préstamo de IP de un pool por tiempo limitado.</p>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">Automática</h6>
                            <p class="small text-muted mb-0">Asigna IP permanente al primero que la pida.</p>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold">Estática (Reserva)</h6>
                            <p class="small text-muted mb-0">Basada en la dirección MAC (impresoras/servidores).</p>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="card border-danger mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">Seguridad y Limpieza</div>
                <div class="card-body">
                    <h6><i class="bi bi-shield-check me-2"></i>DHCP Snooping</h6>
                    <p class="small text-muted">Evita servidores "piratas" en switches.</p>
                    <hr>
                    <h6><i class="bi bi-broadcast me-2"></i>Ping Check</h6>
                    <p class="small text-muted">Verifica si una IP está en uso antes de asignarla.</p>
                    <hr>
                    <h6><i class="bi bi-x-circle me-2"></i>Exclusiones</h6>
                    <p class="small text-muted">IPs reservadas que el DHCP no debe tocar.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
