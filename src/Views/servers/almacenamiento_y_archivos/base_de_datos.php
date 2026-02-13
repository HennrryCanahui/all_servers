<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor de Base de Datos <small class="text-muted">(Database Server)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">El Motor de la Información Estructurada.</p>
                <p>Un <strong>Servidor de Base de Datos</strong> es un sistema dedicado a servir como almacén estructurado de datos para otras aplicaciones. Su función es garantizar la integridad, seguridad y rapidez en la recuperación de la información más valiosa de una infraestructura.</p>
                <div class="card bg-primary bg-opacity-10 border-primary border-opacity-25 p-4 mb-4 shadow rounded-4 overflow-hidden position-relative">
                    <div class="position-relative">
                        <p class="mb-0 fw-bold text-primary">Gestión Concurrente</p>
                        <p class="mb-0 small text-muted">Permite que miles de usuarios accedan y modifiquen datos simultáneamente bajo estrictas reglas de consistencia (ACID).</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Clasificación de Sistemas de Datos</h3>
                <p>Dependiendo de la naturaleza del dato, elegimos entre dos grandes familias:</p>
                
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-top border-4 border-primary">
                            <div class="card-body">
                                <h6 class="fw-bold">Relacionales (SQL)</h6>
                                <p class="small text-muted">Tablas vinculadas con estructura fija. Ideal para finanzas y ERPs.</p>
                                <span class="badge bg-primary-subtle text-primary">MySQL, PostgreSQL, MSSQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-top border-4 border-success">
                            <div class="card-body">
                                <h6 class="fw-bold">No Relacionales (NoSQL)</h6>
                                <p class="small text-muted">Escalabilidad masiva y esquemas flexibles para Big Data o Redes Sociales.</p>
                                <span class="badge bg-success-subtle text-success">MongoDB, Redis, Cassandra</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. SQL: El Lenguaje Universal</h3>
                <div class="bg-dark text-light p-4 rounded-4 shadow-sm mb-4 font-monospace small">
                    <div class="mb-2 text-info">// Ejemplo de consulta SQL estándar</div>
                    <div><span class="text-warning">SELECT</span> name, email <span class="text-warning">FROM</span> users <span class="text-warning">WHERE</span> status = 'active' <span class="text-warning">ORDER BY</span> created_at <span class="text-warning">DESC</span>;</div>
                </div>
                <p>Mientas que SQL usa tablas, los sistemas NoSQL suelen utilizar <strong>JSON</strong> o pares <strong>Clave-Valor</strong> (como Redis) para lograr velocidades de respuesta instantáneas.</p>
            </section>

            <section class="mb-5">
                <div class="alert alert-info border-info shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-info"><i class="bi bi-bookmark-star-fill me-2"></i>Sugerencia Técnica: El Poder de los Índices</h4>
                    <p class="small mb-2">Un índice es una estructura que el servidor guarda en RAM para localizar datos sin escanear toda la tabla (Full Table Scan).</p>
                    <hr>
                    <p class="small mb-0 opacity-75"><strong>Cuidado:</strong> No abuses; demasiados índices ralentizan las escrituras (INSERT/UPDATE), ya que el servidor debe actualizar el mapa cada vez que el dato cambia.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria (RAM)</h3>
                <p>En las bases de datos, la RAM es el recurso más sagrado. Si no cabe en RAM, morirá en el disco duro:</p>
                <div class="accordion shadow-sm" id="dbMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBuffer">
                                1. Buffer Pool y Algoritmo LRU
                            </button>
                        </h2>
                        <div id="collapseBuffer" class="accordion-collapse collapse show" data-bs-parent="#dbMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Buffer Pool:</strong> El servidor carga los datos más frecuentes del disco a la RAM. Leer en RAM toma microsegundos; en disco toma milisegundos.</li>
                                    <li><strong>Gestión LRU:</strong> Cuando se llena, el servidor expulsa lo que nadie consulta para dar espacio a los datos "calientes".</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSort">
                                2. Sort Buffers y Plan de Consulta
                            </button>
                        </h2>
                        <div id="collapseSort" class="accordion-collapse collapse" data-bs-parent="#dbMemAccordion">
                            <div class="accordion-body">
                                <p><strong>Sort Buffers:</strong> Memoria dedicada exclusivamente a ordenar resultados (ORDER BY). Si el buffer es pequeño, el servidor usará el disco y la consulta será 100 veces más lenta.</p>
                                <p><strong>Plan Cache:</strong> Guarda en RAM la "ruta de ataque" para no tener que calcular cómo buscar los datos cada vez que se repite una consulta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLogs">
                                3. Log Buffers (Transacciones)
                            </button>
                        </h2>
                        <div id="collapseLogs" class="accordion-collapse collapse" data-bs-parent="#dbMemAccordion">
                            <div class="accordion-body">
                                Antes de escribir en disco, el servidor anota el cambio en un buffer de RAM. Esto permite recuperarse de fallos revisando qué quedó pendiente antes del "commit" final.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Recuperación de Datos</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-hdd-network display-1 text-primary mb-3"></i>
                    <h5>App Query <i class="bi bi-arrow-right"></i> RAM Cache (Buffer Pool) <i class="bi bi-arrow-right"></i> Disco Físico</h5>
                    <p class="text-muted small">Representación del flujo jerárquico de búsqueda de información.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-xeqMyQaqWs?si=5I84tjHw4nG_RHE1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white text-center fw-bold">Parámetros de Salud</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-lightning-fill fs-4 text-warning"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Hit Ratio</h6>
                            <p class="small text-muted mb-0">% de datos encontrados en RAM.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-people-fill fs-4 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Conexiones</h6>
                            <p class="small text-muted mb-0">Usuarios activos simultáneos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded bg-light me-3 border">
                            <i class="bi bi-stopwatch-fill fs-4 text-danger"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Slow Queries</h6>
                            <p class="small text-muted mb-0">Consultas que superan el umbral.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Stack de Especialización</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">PostgreSQL</h6>
                            <p class="mb-0 x-small text-muted">La base de datos relacional más avanzada.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Redis</h6>
                            <h6 class="mb-0 x-small text-muted">In-memory Store para caché ultra-rápido.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">MongoDB</h6>
                            <p class="mb-0 x-small text-muted">Líder en almacenamiento de documentos NoSQL.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-dark text-white mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold"><i class="bi bi-cpu me-2"></i>Performance Tip</h6>
                    <p class="x-small mb-0 opacity-75">Una base de datos bien optimizada debe tener un <strong>Buffer Pool Hit Ratio</strong> superior al 95%. Si es menor, necesitas más RAM física inmediatamente.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>