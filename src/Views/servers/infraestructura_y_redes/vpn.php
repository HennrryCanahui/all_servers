<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor VPN <small class="text-muted">(Virtual Private Network)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">El Túnel Privado en la Red Pública.</p>
                <p>Una <strong>VPN</strong> es una tecnología que permite extender una red local sobre una red pública como Internet. Crea un canal de comunicación cifrado (un "túnel") que protege los datos desde el dispositivo del usuario hasta el servidor, garantizando privacidad absoluta.</p>
                <div class="card bg-primary text-white border-0 p-4 mb-4 shadow rounded-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-lock-fill fs-1 me-4"></i>
                        <div>
                            <p class="mb-0 fw-bold">Tráfico Encapsulado</p>
                            <p class="mb-0 small opacity-75">Tus datos viajan dentro de paquetes cifrados, invisibles para tu proveedor de internet o atacantes externos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Funcionamiento: El Túnel</h3>
                <p>El servidor utiliza un proceso llamado <strong>encapsulamiento</strong>: cada paquete de datos se mete dentro de otro paquete cifrado. Solo eres un flujo de datos ilegibles viajando hacia la dirección IP del servidor VPN.</p>
                
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold"><i class="bi bi-person-workspace me-2 text-primary"></i>Acceso Remoto</h6>
                                <p class="small text-muted mb-0">Client-to-Site: Un usuario se conecta a la oficina desde su casa. Ideal para el teletrabajo seguro.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold"><i class="bi bi-buildings me-2 text-primary"></i>Sitio a Sitio</h6>
                                <p class="small text-muted mb-0">Site-to-Site: Conecta dos oficinas completas de forma permanente, uniendo sus redes locales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Protocolos de Nueva Generación</h3>
                <p>El rendimiento y la seguridad dependen del protocolo que administre el servidor:</p>
                <div class="list-group list-group-flush shadow-sm rounded border">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold">OpenVPN</h6>
                            <span class="badge bg-dark rounded-pill">Estándar</span>
                        </div>
                        <p class="small text-muted mb-1">Código abierto, extremadamente seguro y flexible. Compatible con casi cualquier sistema.</p>
                    </div>
                    <div class="list-group-item bg-light">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold text-success">WireGuard</h6>
                            <span class="badge bg-success rounded-pill">Más Rápido</span>
                        </div>
                        <p class="small text-muted mb-1">Nueva generación. Más ligero, rápido y eficiente debido a su criptografía moderna.</p>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold">IPsec / L2TP</h6>
                            <span class="badge bg-secondary rounded-pill">Móvil</span>
                        </div>
                        <p class="small text-muted mb-1">Muy común en dispositivos móviles, aunque más fácil de bloquear por firewalls.</p>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-warning border-warning shadow-sm">
                    <h4 class="alert-heading h5 fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Sugerencia Técnica: El Kill Switch</h4>
                    <p class="small mb-0">Es una función vital: si la conexión VPN se corta por un milisegundo, el software bloquea instantáneamente todo el tráfico de internet. Esto evita que tu IP real se filtre accidentalmente a la red pública.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>La gestión de memoria en un servidor VPN es intensiva debido al cifrado en tiempo real:</p>
                <div class="accordion shadow-sm" id="vpnMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEncryption">
                                1. Cifrado en RAM y Zero-copy
                            </button>
                        </h2>
                        <div id="collapseEncryption" class="accordion-collapse collapse show" data-bs-parent="#vpnMemAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Buffers de Cifrado:</strong> Reserva bloques de RAM para procesar algoritmos como AES-256 sin generar latencia (jitter).</li>
                                    <li><strong>Zero-copy:</strong> Técnica moderna donde los datos van de la red a la RAM sin intervención excesiva de la CPU, reduciendo calor y consumo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRouting">
                                2. Tablas de Enrutamiento Virtual
                            </button>
                        </h2>
                        <div id="collapseRouting" class="accordion-collapse collapse" data-bs-parent="#vpnMemAccordion">
                            <div class="accordion-body">
                                El servidor deba mantener en RAM la relación exacta entre la IP real del usuario y su IP virtual asignada dentro del túnel para cada sesión activa.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePFS">
                                3. Perfect Forward Secrecy (PFS)
                            </button>
                        </h2>
                        <div id="collapsePFS" class="accordion-collapse collapse" data-bs-parent="#vpnMemAccordion">
                            <div class="accordion-body">
                                Las llaves de cifrado cambian periódicamente en memoria. Si alguien lograra volcar la RAM en el futuro, las llaves antiguas ya habrán sido borradas y sobrescritas, protegiendo sesiones pasadas.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Tunelización</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-bezier2 display-1 text-primary mb-3"></i>
                    <h5>Túnel Cifrado Punto a Punto</h5>
                    <p class="text-muted small">Representación de la red privada extendida sobre Internet.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8EQKaVCuGaY?si=NdlMIu7RL7rNiNub" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white">Beneficios Clave</div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded me-3 text-primary">
                            <i class="bi bi-eye-slash-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Privacidad</h6>
                            <p class="small text-muted mb-0">Navegación anónima real.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-2 rounded me-3 text-success">
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Localización</h6>
                            <p class="small text-muted mb-0">Cambia tu IP a cualquier país.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-info bg-opacity-10 p-2 rounded me-3 text-info">
                            <i class="bi bi-wifi-off fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Seguridad Pública</h6>
                            <p class="small text-muted mb-0">Protección en Wifis abiertas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-dark mb-4 shadow-sm">
                <div class="card-header bg-dark text-white">Software Servidor</div>
                <div class="card-body small">
                    <p class="mb-2"><strong>OpenVPN Access Server</strong></p>
                    <p class="mb-2"><strong>SoftEther VPN</strong></p>
                    <p class="mb-2"><strong>Pritunl</strong></p>
                    <p class="mb-0"><strong>Tailscale (ZeroTier)</strong></p>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Criptografía</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item">AES-256-GCM</li>
                    <li class="list-group-item">ChaCha20-Poly1305</li>
                    <li class="list-group-item">Intercambio Diffie-Hellman</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>