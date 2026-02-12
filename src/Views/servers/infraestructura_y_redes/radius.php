<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-4 mb-4">Servidores de Autenticación <small class="text-muted">(RADIUS y LDAP)</small></h1>
            
            <section class="mb-5">
                <p class="lead text-primary fw-bold">Gestión de Identidades y Control de Acceso.</p>
                <p>En una infraestructura profesional, no basta con tener una IP o un firewall; es necesario gestionar identidades. Mientras que <strong>LDAP</strong> es el gran directorio donde se guarda la información, <strong>RADIUS</strong> es el portero que vigila el acceso a la red física y remota.</p>
                <div class="card bg-light border-0 p-4 mb-4 shadow-sm">
                    <p class="mb-0"><strong>La Clave del Éxito:</strong> La integración de ambos permite un sistema de Seguridad Unificada, donde un solo usuario tiene acceso controlado a múltiples recursos de red.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>1. Servidor LDAP <small class="text-muted">(Lightweight Directory Access Protocol)</small></h3>
                <p>Es un protocolo diseñado para gestionar directorios de información. Imaginalo como una base de datos jerárquica optimizada para lecturas rápidas.</p>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>Estructura de Datos:</strong> Organiza la información en forma de árbol invertido <strong>(DIT - Directory Information Tree)</strong>.</li>
                    <li class="list-group-item"><strong>Centralización:</strong> Permite el <strong>Single Sign-On (SSO)</strong>, usando la misma clave para correo, PC e intranet.</li>
                </ul>
                
                <div class="accordion mb-4" id="ldapAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLdapMem">
                                Gestión de Memoria en LDAP
                            </button>
                        </h2>
                        <div id="collapseLdapMem" class="accordion-collapse collapse show" data-bs-parent="#ldapAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Caché de Entradas:</strong> Mantiene en RAM los objetos consultados recientemente.</li>
                                    <li><strong>Indexación:</strong> Crea "punteros" en memoria para atributos específicos (uid, email), acelerando las búsquedas constantes.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>2. Servidor RADIUS <small class="text-muted">(Remote Authentication Dial-In User Service)</small></h3>
                <p>Protocolo de seguridad enfocado en el control de acceso a la red (estándar 802.1X). Es el que valida tus credenciales al conectar a la VPN o Wi-Fi.</p>
                
                <div class="row g-4 mt-2 mb-4">
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-primary">
                            <span class="badge bg-primary mb-2">A - Authentication</span>
                            <p class="small text-muted mb-0">¿Es quien dice ser? (Usuario/Password/Certificado).</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-success">
                            <span class="badge bg-success mb-2">A - Authorization</span>
                            <p class="small text-muted mb-0">¿Tiene permiso para entrar a esta red específica?</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-3 border rounded bg-white shadow-sm h-100 border-info text-dark">
                            <span class="badge bg-info text-dark mb-2">A - Accounting</span>
                            <p class="small text-muted mb-0">¿Cuánto tiempo estuvo y cuántos datos gastó?</p>
                        </div>
                    </div>
                </div>

                <div class="accordion mb-4" id="radiusAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRadiusMem">
                                Gestión de Memoria en RADIUS
                            </button>
                        </h2>
                        <div id="collapseRadiusMem" class="accordion-collapse collapse show" data-bs-parent="#radiusAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Diccionarios en RAM:</strong> Carga atributos específicos de fabricantes (Cisco, Aruba) para hablar su mismo "idioma".</li>
                                    <li><strong>Tabla de Sesiones Active:</strong> Guarda quién está conectado para poder expulsar usuarios sin re-autenticar constantemente.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5">
                <h3>Trabajo en Conjunto: La Llave y el Candado</h3>
                <div class="card border-primary p-4 bg-light">
                    <p class="mb-0">Cuando un usuario intenta entrar a una VPN (RADIUS - el candado), este le pregunta al servidor LDAP (la llave): "¿Existe este usuario y es correcta su clave?". LDAP responde y RADIUS abre o cierra el acceso.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Esquema Técnico</h3>
                <div class="text-center my-4 p-5 border border-dashed rounded bg-light shadow-sm">
                    <i class="bi bi-person-lock display-1 text-primary mb-3"></i>
                    <h5>Integración RADIUS + LDAP</h5>
                    <p class="text-muted small">Visualización del flujo de autenticación centralizada.</p>
                </div>
            </section>

            <section class="mb-5">
                <h3>Video Explicativo</h3>
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/S263IsmS3Yk"
                        title="RADIUS/LDAP Explanation Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="card border-primary mb-4 shadow">
                <div class="card-header bg-primary text-white">Comparativa LDAP vs RADIUS</div>
                <div class="card-body p-0">
                    <table class="table table-sm table-striped mb-0 small">
                        <thead class="table-dark">
                            <tr>
                                <th>Característica</th>
                                <th>LDAP</th>
                                <th>RADIUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Uso</strong></td>
                                <td>Almacenar perfiles</td>
                                <td>Control de red</td>
                            </tr>
                            <tr>
                                <td><strong>Protocolo</strong></td>
                                <td>TCP (389)</td>
                                <td>UDP (1812)</td>
                            </tr>
                            <tr>
                                <td><strong>Jerarquía</strong></td>
                                <td>Tipo Árbol</td>
                                <td>Lista Plana</td>
                            </tr>
                            <tr>
                                <td><strong>Seguridad</strong></td>
                                <td>TLS/SSL</td>
                                <td>Secreto/Certif.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card border-info mb-4 shadow-sm">
                <div class="card-header bg-info text-dark">Software Popular</div>
                <div class="card-body small">
                    <h6 class="fw-bold mb-1">Microsoft Active Directory</h6>
                    <p class="text-muted">La implementación más usada que combina LDAP y Kerberos.</p>
                    <hr>
                    <h6 class="fw-bold mb-1">OpenLDAP</h6>
                    <p class="text-muted">El estándar de código abierto para directorios en Linux.</p>
                    <hr>
                    <h6 class="fw-bold mb-1">FreeRADIUS</h6>
                    <p class="text-muted">Servidor RADIUS líder mundial por su flexibilidad.</p>
                </div>
            </div>

            <div class="card border-warning mb-4 shadow-sm">
                <div class="card-header bg-warning text-dark">Protocolos de Seguridad</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><strong>EAP-TLS:</strong> El más seguro para redes Wifi corporativas.</li>
                    <li class="list-group-item"><strong>PEAP:</strong> Autenticación mediante túnel TLS.</li>
                    <li class="list-group-item"><strong>LDAPS:</strong> Versión segura de LDAP sobre SSL.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>