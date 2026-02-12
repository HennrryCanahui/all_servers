<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor NTP <small class="text-muted">(Network Time Protocol)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-info fw-bold">El Reloj Maestro que Mantiene tu Red en Hora.</p>
                <p>En informática, el tiempo no es relativo; es una ley. El protocolo NTP es el encargado de que todos los dispositivos de una red tengan exactamente la misma hora, con precisiones de milisegundos, utilizando el puerto UDP 123.</p>
                <div class="card bg-light border-0 p-4 mb-4">
                    <p class="mb-0"><strong>¿Por qué es vital?</strong> Sin sincronización, los certificados SSL fallarían, la reconstrucción de logs tras un hackeo sería imposible y sistemas como Active Directory bloquearían inicios de sesión por desfase temporal.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>La Jerarquía del Tiempo: Los ESTRATOS</h3>
                <p>NTP organiza la precisión en niveles jerárquicos llamados "Stratum":</p>
                <div class="list-group list-group-flush shadow-sm rounded border mb-4">
                    <div class="list-group-item">
                        <h6 class="mb-1 fw-bold text-primary">Stratum 0</h6>
                        <p class="small text-muted mb-0">Relojes atómicos o GPS. No están en la red, se conectan directamente al servidor.</p>
                    </div>
                    <div class="list-group-item">
                        <h6 class="mb-1 fw-bold text-primary">Stratum 1</h6>
                        <p class="small text-muted mb-0">Servidores conectados al nivel 0. Son los "relojes maestros" de Internet.</p>
                    </div>
                    <div class="list-group-item">
                        <h6 class="mb-1 fw-bold text-primary">Stratum 2</h6>
                        <p class="small text-muted mb-0">Servidores que se sincronizan con el nivel 1. La mayoría de empresas usan este nivel.</p>
                    </div>
                    <div class="list-group-item bg-light">
                        <h6 class="mb-1 fw-bold text-muted">Stratum 3+</h6>
                        <p class="small text-muted mb-0">Dispositivos finales (PCs, cámaras) que reciben la hora de niveles superiores.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>¿Cómo administra su Proceso y Memoria?</h3>
                <p>NTP consume pocos recursos de memoria, pero utiliza algoritmos inteligentes para corregir desvíos físicos.</p>
                <div class="accordion" id="ntpAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarzullo">
                                1. El Algoritmo de Marzullo
                            </button>
                        </h2>
                        <div id="collapseMarzullo" class="accordion-collapse collapse show" data-bs-parent="#ntpAccordion">
                            <div class="accordion-body">
                                El servidor no solo "copia" la hora. Consulta a varios servidores, descarta a los que "mienten" (tienen desfases grandes) y calcula un promedio ponderado de los más estables.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDrift">
                                2. Administración de la "Deriva" (Drift)
                            </button>
                        </h2>
                        <div id="collapseDrift" class="accordion-collapse collapse" data-bs-parent="#ntpAccordion">
                            <div class="accordion-body">
                                Los PCs suelen adelantarse o atrasarse por el calor. NTP guarda en memoria un <strong>archivo de deriva (.drift)</strong> que indica cuánto se desvía el reloj interno cada día para compensarlo preventivamente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSlew">
                                3. Ajuste Suave (Clock Slewing)
                            </button>
                        </h2>
                        <div id="collapseSlew" class="accordion-collapse collapse" data-bs-parent="#ntpAccordion">
                            <div class="accordion-body">
                                Para no romper bases de datos cambiando la hora de golpe, NTP acelera o ralentiza el reloj del sistema imperceptiblemente hasta que se ajusta a la hora real.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Sincronización</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light">
                    <!-- Espacio para diagrama -->
                    <i class="bi bi-clock-history display-1 text-info"></i>
                    <h5 class="mt-3">Sincronización Multicapa</h5>
                    <p class="text-muted small">Desde el Reloj Atómico hasta tu Smartphone.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Importancia del NTP</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="NTP Explanation"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark">¿Por qué es importante?</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <h6 class="fw-bold mb-1"><i class="bi bi-shield-lock me-2"></i>Seguridad SSL</h6>
                            <p class="small text-muted mb-0">Si la hora es incorrecta, los certificados HTTPS se invalidan.</p>
                        </li>
                        <li class="mb-3">
                            <h6 class="fw-bold mb-1"><i class="bi bi-journal-text me-2"></i>Logs Forenses</h6>
                            <p class="small text-muted mb-0">Vital para reconstruir secuencias en auditorías de seguridad.</p>
                        </li>
                        <li>
                            <h6 class="fw-bold mb-1"><i class="bi bi-key me-2"></i>Autenticación</h6>
                            <p class="small text-muted mb-0">Kerberos falla si el desfase es mayor a 5 minutos.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">NTP vs SNTP</div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-bold">SNTP (Simple)</h6>
                        <p class="small text-muted">Para cámaras IoT o timbres. Solo copia la hora, no tiene algoritmos de corrección.</p>
                    </div>
                    <hr>
                    <div class="mb-0">
                        <h6 class="fw-bold">NTP (Completo)</h6>
                        <p class="small text-muted">Estándar profesional para servidores que requieren precisión absoluta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
