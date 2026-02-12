<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidor SSH <small class="text-muted">(Secure Shell)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-dark fw-bold">El Túnel Seguro para la Administración Remota.</p>
                <p>El servidor <strong>SSH</strong> es el estándar para acceder y gestionar máquinas a distancia de forma segura. Permite a los administradores "teletransportarse" a la terminal de cualquier servidor del mundo de manera cifrada.</p>
                <div class="card bg-dark text-white border-0 p-4 mb-4 shadow">
                    <p class="mb-0 font-monospace small"><span class="text-success">visitor@wikiserver:~$</span> ssh-keygen -t ed25519 -C "admin@example.com"</p>
                    <p class="mb-0 small text-muted">Generando par de llaves públicas/privadas...</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Seguridad y Cifrado</h3>
                <p>A diferencia de Telnet (texto plano), SSH cifra toda la información de extremo a extremo:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100">
                            <h6 class="fw-bold text-primary">Establecimiento (Asimétrico)</h6>
                            <p class="small text-muted mb-0">Utiliza un par de llaves (Pública/Privada) para intercambiar una clave de sesión segura inicialmente.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded bg-white h-100">
                            <h6 class="fw-bold text-success">Datos (Simétrico)</h6>
                            <p class="small text-muted mb-0">Una vez establecida la sesión, usa algoritmos rápidos como AES para cifrar todo el tráfico de la terminal.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Autenticación: Contraseñas vs Llaves</h3>
                <p>SSH ofrece dos métodos principales para validar la identidad del administrador:</p>
                <div class="list-group shadow-sm border mb-4">
                    <div class="list-group-item d-flex align-items-center">
                        <i class="bi bi-keyboard fs-3 me-3 text-warning"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Por Contraseña</h6>
                            <p class="small text-muted mb-0">Método tradicional. Vulnerable a ataques de fuerza bruta si no se protege.</p>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center bg-light">
                        <i class="bi bi-key-fill fs-3 me-3 text-primary"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Por Llaves (RSA / Ed25519)</h6>
                            <p class="small text-muted mb-0">El método profesional. Sin la llave privada física en tu PC, es imposible entrar.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div class="alert alert-info border-info shadow-sm">
                    <h4 class="alert-heading h5"><i class="bi bi-shield-check me-2"></i>Sugerencia Técnica: Hardening</h4>
                    <p class="small mb-0">Para una seguridad real, ajusta el archivo <code>/etc/ssh/sshd_config</code>:</p>
                    <hr>
                    <ul class="mb-0 small">
                        <li><strong>Cambiar puerto (22):</strong> Reduce el 90% de ataques automáticos de bots.</li>
                        <li><strong>Desactivar Root:</strong> Usa <code>PermitRootLogin no</code> para obligar a usar sudo.</li>
                        <li><strong>Desactivar Passwords:</strong> Usa <code>PasswordAuthentication no</code> una vez tengas tus llaves.</li>
                    </ul>
                </div>
            </section>

            <section class="mb-5">
                <h3>Administración de Memoria</h3>
                <p>SSH es ligero pero crítico en su gestión de recursos:</p>
                <div class="accordion shadow-sm" id="sshMemAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFork">
                                1. Gestión de Procesos (Forking)
                            </button>
                        </h2>
                        <div id="collapseFork" class="accordion-collapse collapse show" data-bs-parent="#sshMemAccordion">
                            <div class="accordion-body">
                                Cada conexión genera un <strong>proceso hijo</strong> en RAM. Esto aisla las sesiones: si una falla, no afecta al servidor ni a otros usuarios.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBuffer">
                                2. Buffers de Cifrado
                            </button>
                        </h2>
                        <div id="collapseBuffer" class="accordion-collapse collapse" data-bs-parent="#sshMemAccordion">
                            <div class="accordion-body">
                                Utiliza buffers en RAM para procesar el cifrado/descifrado en tiempo real. Un ajuste correcto elimina el "lag" en terminales con mucha carga.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWipe">
                                3. Limpieza Automática (Key Wiping)
                            </button>
                        </h2>
                        <div id="collapseWipe" class="accordion-collapse collapse" data-bs-parent="#sshMemAccordion">
                            <div class="accordion-body">
                                Al cerrar la sesión, las llaves efímeras de la RAM se sobrescriben inmediatamente para no dejar rastro físico en la memoria del servidor.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema de Conexión</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-terminal display-1 text-dark mb-3"></i>
                    <h5>Túnel de Administración Segura</h5>
                    <p class="text-muted small">Cifrado de punto a punto: Cliente <i class="bi bi-shield-shaded"></i> Servidor.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video: SSH y Llaves RSA</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="SSH Tutorial Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-dark mb-4 shadow">
                <div class="card-header bg-dark text-white">Funciones Clave</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <h6 class="fw-bold mb-1"><i class="bi bi-command me-2"></i>Acceso a Consola</h6>
                            <p class="small text-muted mb-0">Ejecución total de comandos remotos.</p>
                        </li>
                        <hr>
                        <li class="mb-3">
                            <h6 class="fw-bold mb-1"><i class="bi bi-file-earmark-lock-fill me-2"></i>SFTP / SCP</h6>
                            <p class="small text-muted mb-0">Transferencia segura de archivos cifrados.</p>
                        </li>
                        <hr>
                        <li>
                            <h6 class="fw-bold mb-1"><i class="bi bi-box-arrow-in-right me-2"></i>Túneles SSH</h6>
                            <p class="small text-muted mb-0">Encapsula otros protocolos (HTTP, DB) en un túnel seguro.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card border-primary mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Software Recomendado</div>
                <div class="card-body small">
                    <h6 class="fw-bold">OpenSSH</h6>
                    <p class="text-muted">El estándar mundial para servidores Linux/Unix.</p>
                    <hr>
                    <h6 class="fw-bold">PuTTY / MobaXterm</h6>
                    <p class="text-muted">Clientes populares para Windows.</p>
                </div>
            </div>

            <div class="card border-danger mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">¡Cuidado!</div>
                <div class="card-body small">
                    <p class="mb-0 text-danger fw-bold">Ataques de Fuerza Bruta</p>
                    <p class="text-muted">Sin protección (como Fail2ban), el puerto 22 es el objetivo #1 de bots en Internet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>