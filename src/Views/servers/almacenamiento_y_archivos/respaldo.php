<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Respaldo <small class="text-muted">(Backup Server)</small></h1>
            
            <section class="mb-5">
                <p class="lead">Un Servidor de Respaldo es un sistema dedicado a la copia, protección y recuperación de los datos almacenados en otros servidores o estaciones de trabajo.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm border-start border-primary border-4">
                    <p class="mb-0">Su función no es solo "guardar una copia", sino garantizar que esa copia sea íntegra, esté disponible y pueda restaurarse en el menor tiempo posible tras una pérdida de datos.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Estrategias de Respaldo</h3>
                <p>El servidor gestiona cómo se guardan los datos para optimizar el espacio y el tiempo:</p>
                <div class="list-group list-group-flush mb-4 shadow-sm rounded">
                    <div class="list-group-item">
                        <strong><i class="bi bi-file-earmark-plus text-primary"></i> Copia Completa (Full Backup):</strong> 
                        Se copia todo el conjunto de datos. Pesada, pero la más fácil de restaurar.
                    </div>
                    <div class="list-group-item">
                        <strong><i class="bi bi-plus-circle text-success"></i> Copia Incremental:</strong> 
                        Solo guarda archivos cambiados desde el último respaldo. Ahorra mucho espacio.
                    </div>
                    <div class="list-group-item">
                        <strong><i class="bi bi-intersect text-warning"></i> Copia Diferencial:</strong> 
                        Guarda cambios desde el último respaldo completo. Equilibrio entre velocidad y espacio.
                    </div>
                </div>
                
                <div class="text-center my-4">
                    <img src="https://images.unsplash.com/photo-1591405351990-4726e33df58d?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded shadow" alt="Protección de Datos">
                    <p class="text-muted small mt-2">Arquitectura de protección de datos y recuperación ante desastres</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. La Regla de Oro: El Modelo 3-2-1</h3>
                <div class="row text-center g-3">
                    <div class="col-md-4">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary">3</h2>
                            <h6>Copias de datos</h6>
                            <p class="small text-muted">La original y dos respaldos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary">2</h2>
                            <h6>Soportes</h6>
                            <p class="small text-muted">Diferentes medios (Local y Externo).</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded bg-white shadow-sm h-100">
                            <h2 class="text-primary">1</h2>
                            <h6>Copia Off-site</h6>
                            <p class="small text-muted">Fuera de línea o en la nube.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>3. Administración de Memoria y Eficiencia</h3>
                <div class="accordion" id="backupAccordion">
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDeduplication">
                                Deduplicación y Tablas de Hash
                            </button>
                        </h2>
                        <div id="collapseDeduplication" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                El servidor analiza bloques de datos y genera <strong>identificadores únicos (hashes)</strong> en la RAM. Si el bloque existe, solo crea un puntero. Mantener estos índices en RAM acelera el proceso drásticamente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCompression">
                                Buffers de Compresión y Catálogo
                            </button>
                        </h2>
                        <div id="collapseCompression" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Antes de escribir a disco, el servidor usa algoritmos como <strong>LZ4 o ZSTD</strong> en RAM. Además, carga los índices de respaldos recientes en caché para búsquedas instantáneas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLanding">
                                Zonas de Aterrizaje (Landing Zones)
                            </button>
                        </h2>
                        <div id="collapseLanding" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Reserva porciones de RAM como búferes de I/O masivo. Los datos llegan a velocidad de red y se gestionan para escribirse secuencialmente, evitando la fragmentación del disco físico.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6CyC-uZH37k?si=m3mkHY8W5gOpVlYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card border-danger mb-4 shadow">
                <div class="card-header bg-danger text-white"><i class="bi bi-shield-lock-fill"></i> Sugerencia Técnica</div>
                <div class="card-body">
                    <h6>Inmutabilidad contra Ransomware</h6>
                    <p class="small">Utiliza tecnología <strong>WORM</strong> (Write Once, Read Many). Una vez escrito, el respaldo no puede ser borrado ni modificado durante un tiempo definido, ni siquiera por el administrador.</p>
                    <div class="alert alert-warning py-2 small mb-0">
                        <i class="bi bi-exclamation-triangle"></i> Vital contra ataques modernos.
                    </div>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-white">Métricas de Recuperación</div>
                <div class="card-body small">
                    <p><strong>RTO (Recovery Time Objective):</strong> Tiempo máximo para restaurar el servicio.</p>
                    <p class="mb-0"><strong>RPO (Recovery Point Objective):</strong> Cantidad de datos que la empresa puede permitirse perder.</p>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Software Recomendado</div>
                <div class="list-group list-group-flush small">
                    <div class="list-group-item border-0">Veeam Backup & Replication</div>
                    <div class="list-group-item border-0">Bacula (Open Source)</div>
                    <div class="list-group-item border-0">Restic / Duplicati (Nube)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
