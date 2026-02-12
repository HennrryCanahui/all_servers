<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor Firewall <small class="text-muted">(Cortafuegos)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-danger fw-bold">El Guardián de tu Perímetro de Red.</p>
                <p>Un Firewall es un sistema de seguridad de red que monitorea y filtra el tráfico basándose en un conjunto de reglas. Si el router es la puerta de tu casa, el Firewall es el sistema de seguridad inteligente que inspecciona a cada visitante.</p>
                <div class="card bg-light border-0 p-4 mb-4">
                    <p class="mb-0"><strong>Objetivo Principal:</strong> Crear una barrera inexpugnable entre una red interna confiable (LAN) y una red externa no confiable (Internet), bloqueando accesos no autorizados mientras se permite el flujo legítimo.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Niveles de Inspección: ¿Cómo filtran?</h3>
                <p>No todos los cortafuegos revisan de la misma forma. Existen tres niveles fundamentales:</p>
                <div class="row g-4 mt-2">
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-secondary mb-2">Lvl 1: Filtrado de Paquetes</span>
                            <p class="small text-muted mb-0">Revisa solo IP y puerto. Rápido pero superficial.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-primary mb-2">Lvl 2: Stateful Inspection</span>
                            <p class="small text-muted mb-0">Recuerda conexiones abiertas. Mucho más seguro.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <span class="badge bg-success mb-2">Lvl 3: NGFW (Next-Gen)</span>
                            <p class="small text-muted mb-0">Inspección profunda (DPI), antivirus e IPS integrado.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria: La Tabla de Estados</h3>
                <p>Para ser eficiente, el Firewall no analiza cada paquete desde cero. Utiliza su memoria RAM para gestionar conexiones activas.</p>
                <div class="accordion" id="firewallAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseState">
                                1. La Tabla de Estados (State Table)
                            </button>
                        </h2>
                        <div id="collapseState" class="accordion-collapse collapse show" data-bs-parent="#firewallAccordion">
                            <div class="accordion-body">
                                Cuando solicitas una web, el Firewall anota esa "conversación" en RAM. Cuando la web responde, el Firewall revisa su memoria y permite el paso instantáneo sin reaplicar todas las reglas, ahorrando CPU.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrioritization">
                                2. Priorización de Reglas (Top-to-Bottom)
                            </button>
                        </h2>
                        <div id="collapsePrioritization" class="accordion-collapse collapse" data-bs-parent="#firewallAccordion">
                            <div class="accordion-body">
                                El Firewall lee las reglas de arriba hacia abajo. Las reglas más usadas (ej: "Permitir HTTP") deben ir al inicio para reducir la latencia y el procesamiento de cada paquete.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext">
                                3. Gestión de Contextos e Inspección Profunda
                            </button>
                        </h2>
                        <div id="collapseContext" class="accordion-collapse collapse" data-bs-parent="#firewallAccordion">
                            <div class="accordion-body">
                                Los Firewalls modernos (NGFW) usan memoria para decodificar protocolos y detectar malware oculto dentro de datos aparentemente inofensivos, requiriendo mayor capacidad de RAM y potencia de cómputo.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema Típico de Red</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light">
                    <!-- Espacio para diagrama -->
                    <i class="bi bi-shield-lock display-1 text-danger"></i>
                    <h5 class="mt-3">Zona Desmilitarizada (DMZ)</h5>
                    <p class="text-muted small">El Firewall separa los servidores públicos (Web) de la red interna privada.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Funcionamiento y Tipos</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Firewall Explanation"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-danger mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">Políticas de Seguridad</div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-bold"><i class="bi bi-check-circle-fill text-success me-2"></i>Restrictiva (Zero Trust)</h6>
                        <p class="small text-muted">Todo lo que no esté permitido, se bloquea. Es el estándar de oro profesional.</p>
                    </div>
                    <hr>
                    <div class="mb-0">
                        <h6 class="fw-bold"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>Permisiva</h6>
                        <p class="small text-muted">Todo lo que no esté prohibido, está permitido. Menos segura, solo usada en entornos controlados.</p>
                    </div>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Hardware vs Software</div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-bold">Firewall de Red (Hardware)</h6>
                        <p class="small text-muted">Un equipo físico dedicado que protege a TODA la red antes de que el tráfico entre.</p>
                    </div>
                    <hr>
                    <div class="mb-0">
                        <h6 class="fw-bold">Firewall de Host (Software)</h6>
                        <p class="small text-muted">Aplicación instalada en cada PC (ej: Windows Firewall). Protege solo al dispositivo individual.</p>
                    </div>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark">Conceptos Expandidos</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item small"><strong>WAF:</strong> Web Application Firewall, específico para proteger apps contra ataques SQLi/XSS.</li>
                    <li class="list-group-item small"><strong>IDS/IPS:</strong> Sistemas de detección y prevención automática de ataques en tiempo real.</li>
                    <li class="list-group-item small"><strong>DMZ:</strong> Subred amortiguadora para servidores expuestos a internet.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
