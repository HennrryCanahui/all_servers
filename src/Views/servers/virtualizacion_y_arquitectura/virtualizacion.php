<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidores de Virtualización <small class="text-muted">(Hypervisors)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-dark fw-bold">El Corazón del Centro de Datos Moderno.</p>
                <p>Un <strong>Servidor de Virtualización</strong> es una máquina física diseñada para ejecutar múltiples sistemas operativos aislados sobre el mismo hardware. Esto se logra gracias al <strong>Hipervisor</strong>, una capa de software que gestiona los recursos físicos para entregarlos a las máquinas virtuales.</p>
                <div class="card bg-primary bg-opacity-10 border-primary border-opacity-25 p-4 mb-4 shadow-sm rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-layers-half fs-1 me-4 text-primary"></i>
                        <div>
                            <p class="mb-0 fw-bold text-primary">Abstracción Total</p>
                            <p class="mb-0 small text-muted">El hipervisor engaña a cada sistema para que crea que posee su propio procesador y memoria de forma exclusiva.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Tipos de Hipervisores</h3>
                <p>La eficiencia depende de cómo se instale la capa de virtualización:</p>
                
                <div class="row g-4 mt-1 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-start border-4 border-success">
                            <div class="card-body">
                                <h6 class="fw-bold">Tipo 1 <small class="text-muted">(Bare Metal)</small></h6>
                                <p class="small text-muted mb-2">Instalado directamente sobre el hardware físico. Es el más eficiente y profesional.</p>
                                <span class="badge bg-success-subtle text-success">VMware ESXi, Proxmox, Hyper-V</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm border-start border-4 border-info">
                            <div class="card-body">
                                <h6 class="fw-bold">Tipo 2 <small class="text-muted">(Hosted)</small></h6>
                                <p class="small text-muted mb-2">Se instala como una aplicación sobre un SO previo. Ideal para pruebas y desarrollo.</p>
                                <span class="badge bg-info-subtle text-info">VirtualBox, VMware Workstation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Máquina Virtual (VM) vs Contenedores</h3>
                <p>Dos formas de entregar recursos aislados:</p>
                <div class="list-group list-group-flush shadow-sm rounded border">
                    <div class="list-group-item d-flex align-items-center">
                        <i class="bi bi-box fs-3 me-3 text-primary"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Máquina Virtual (Full Virtualization)</h6>
                            <p class="small text-muted mb-0">Virtualiza hardware completo. Cada VM tiene su propio kernel. Máxima seguridad y aislamiento.</p>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center bg-light">
                        <i class="bi bi-box-seam fs-3 me-3 text-secondary"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Contenedores (LXC / Docker)</h6>
                            <p class="small text-muted mb-0">Virtualiza solo el SO. Comparten el kernel del anfitrión. Ultra ligeros y rápidos de iniciar.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-primary border-primary shadow-sm bg-white">
                    <h4 class="alert-heading h5 fw-bold text-primary"><i class="bi bi-camera-fill me-2"></i>Sugerencia Técnica: El Poder de los Snapshots</h4>
                    <p class="small mb-2">Permiten capturar el estado completo del servidor en un punto exacto del tiempo. Si una actualización falla, puedes <strong>"congelar el tiempo"</strong> y revertir al estado anterior en segundos.</p>
                    <hr>
                    <p class="small mb-0 opacity-75">Elimina el tiempo de inactividad que causaría una falla crítica en un servidor físico convencional.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria (RAM)</h3>
                <p>La RAM es el recurso más complejo y el primero en agotarse. Se gestiona mediante técnicas avanzadas:</p>
                <div class="accordion shadow-sm" id="virtMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOvercommit">
                                1. Memory Overcommit y Ballooning
                            </button>
                        </h2>
                        <div id="collapseOvercommit" class="accordion-collapse collapse show" data-bs-parent="#virtMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Overcommit:</strong> Permite asignar a las VM más RAM de la que físicamente existe, basándose en que no todas la usarán al 100% al mismo tiempo.</li>
                                    <li><strong>Ballooning:</strong> El hipervisor "infla un globo" dentro de una VM para reclamar RAM ociosa y dársela a otra con mayor carga de trabajo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTPS">
                                2. Transparent Page Sharing (TPS)
                            </button>
                        </h2>
                        <div id="collapseTPS" class="accordion-collapse collapse" data-bs-parent="#virtMemAccordion">
                            <div class="accordion-body">
                                Si tienes 10 VM con el mismo Windows, el hipervisor identifica archivos comunes en RAM. Guarda <strong>solo una copia</strong> y la comparte entre todas, ahorrando gigabytes masivos de memoria física.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReserve">
                                3. RAM Dedicada vs Swap
                            </button>
                        </h2>
                        <div id="collapseReserve" class="accordion-collapse collapse" data-bs-parent="#virtMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Reserved Memory:</strong> Bloquea RAM física fija para servidores críticos (ej. Bases de Datos) que el hipervisor no puede tocar.</li>
                                    <li><strong>Hypervisor Swap:</strong> El último recurso si la RAM se agota. El rendimiento cae un 90% debido a la diferencia de velocidad entre RAM y disco.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Virtualización</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-ui-checks-grid display-1 text-primary mb-3"></i>
                    <h5>Hardware Físico <i class="bi bi-arrow-right"></i> Hipervisor <i class="bi bi-arrow-right"></i> VMs</h5>
                    <p class="text-muted small">Representación del Hardware abstraído en múltiples instancias aisladas.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: Cómo funciona la Virtualización</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="Virtualization Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white text-center fw-bold">Beneficios del Hipervisor</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded me-3 text-primary">
                            <i class="bi bi-piggy-bank-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Consolidación</h6>
                            <p class="small text-muted mb-0">Muchos servidores en 1 solo hardware.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-lightning-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Agilidad</h6>
                            <p class="small text-muted mb-0">Crea servidores en segundos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-2 rounded me-3 text-dark">
                            <i class="bi bi-recycle fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Elasticidad</h6>
                            <p class="small text-muted mb-0">Escala RAM y CPU según la demanda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white text-center fw-bold">Soluciones Enterprise</div>
                <div class="card-body small p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">VMware vSphere</h6>
                            <p class="mb-0 x-small text-muted">Líder indiscutible en centros de datos.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Proxmox VE</h6>
                            <h6 class="mb-0 x-small text-muted">Excelente opción Open Source basada en KVM.</h6>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">Microsoft Hyper-V</h6>
                            <p class="mb-0 x-small text-muted">Integración perfecta con entornos Windows.</p>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1 fw-bold">KVM (Kernel-based VM)</h6>
                            <p class="mb-0 x-small text-muted">El estándar de virtualización nativo de Linux.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark text-center fw-bold">Hardware Crítico</div>
                <div class="card-body small">
                    <p class="mb-2"><strong>VT-x / AMD-V:</strong> Extensiones de CPU indispensables.</p>
                    <p class="mb-2"><strong>Unidades NVMe:</strong> Para evitar el cuello de botella del I/O.</p>
                    <p class="mb-0"><strong>ECC RAM:</strong> Memoria con corrección de errores para estabilidad.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>