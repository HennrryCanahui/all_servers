<?php include __DIR__ . '/layouts/header.php'; ?>

<?php
$categories = [
    'infraestructura' => [
        'title' => 'Infraestructura y Redes',
        'servers' => [
            ['name' => 'Servidor DNS', 'desc' => 'Traduce nombres de dominio a direcciones IP.', 'link' => '/servers/infraestructura_y_redes/dns'],
            ['name' => 'Servidor DHCP', 'desc' => 'Asigna direcciones IP automáticamente.', 'link' => '/servers/infraestructura_y_redes/dhcp'],
            ['name' => 'Servidor Proxy', 'desc' => 'Intermediario para seguridad y caché.', 'link' => '/servers/infraestructura_y_redes/proxy'],
            ['name' => 'Servidor NTP', 'desc' => 'Sincroniza los relojes de los dispositivos.', 'link' => '/servers/infraestructura_y_redes/ntp'],
            ['name' => 'Servidor Firewall', 'desc' => 'Protege la red contra intrusiones.', 'link' => '/servers/infraestructura_y_redes/firewall'],
        ]
    ],
    'almacenamiento' => [
        'title' => 'Almacenamiento y Archivos',
        'servers' => [
            ['name' => 'Servidor de Archivos (NAS/FTP)', 'desc' => 'Almacena y distribuye archivos.', 'link' => '/servers/almacenamiento_y_archivos/archivos'],
            ['name' => 'Servidor de Base de Datos', 'desc' => 'Gestiona grandes volúmenes de datos.', 'link' => '/servers/almacenamiento_y_archivos/base_de_datos'],
            ['name' => 'Servidor de Respaldo (Backup)', 'desc' => 'Dedicado exclusivamente a copias de seguridad y recuperación de desastres.', 'link' => '/servers/almacenamiento_y_archivos/respaldo'],
            ['name' => 'Servidor de Imágenes/Video', 'desc' => 'Optimizado para servir contenido multimedia pesado de forma eficiente.', 'link' => '/servers/almacenamiento_y_archivos/multimedia'],
        ]
    ],
    'comunicacion' => [
        'title' => 'Comunicación y Colaboración',
        'servers' => [
            ['name' => 'Servidor de Correo (SMTP/IMAP/POP3)', 'desc' => 'Gestiona el envío y recepción de emails.', 'link' => '/servers/comunicacion_y_colaboracion/correo'],
            ['name' => 'Servidor de Chat', 'desc' => 'Facilita la mensajería instantánea (XMPP, IRC, Slack interno).', 'link' => '/servers/comunicacion_y_colaboracion/chat'],
            ['name' => 'Servidor SIP / VoIP', 'desc' => 'Maneja la telefonía IP y videollamadas.', 'link' => '/servers/comunicacion_y_colaboracion/sip'],
            ['name' => 'Servidor Groupware', 'desc' => 'Software colaborativo para calendarios, tareas y notas compartidas.', 'link' => '/servers/comunicacion_y_colaboracion/groupware'],
        ]
    ],
    'desarrollo' => [
        'title' => 'Desarrollo y Aplicaciones',
        'servers' => [
            ['name' => 'Servidor Web (Apache/Nginx)', 'desc' => 'Aloja páginas web y contenido HTML.', 'link' => '/servers/desarrollo_y_aplicaciones/web'],
            ['name' => 'Servidor de Aplicaciones', 'desc' => 'Ejecuta la lógica de negocio de un software (Java, Python, Node.js).', 'link' => '/servers/desarrollo_y_aplicaciones/aplicaciones'],
            ['name' => 'Servidor de Impresión', 'desc' => 'Gestiona las colas de impresión de una oficina.', 'link' => '/servers/desarrollo_y_aplicaciones/impresion'],
            ['name' => 'Servidor de Monitoreo', 'desc' => 'Supervisa el estado y rendimiento de otros servidores y redes.', 'link' => '/servers/desarrollo_y_aplicaciones/monitoreo'],
            ['name' => 'Servidor de Seguridad (Firewall/IDS)', 'desc' => 'Protege la red contra intrusiones.', 'link' => '/servers/desarrollo_y_aplicaciones/seguridad'],
        ]
    ],
    'entretenimiento' => [
        'title' => 'Entretenimiento y Multimedia',
        'servers' => [
            ['name' => 'Servidor de Juegos', 'desc' => 'Aloja partidas multijugador online.', 'link' => '/servers/entretenimient_y_multimedia/juegos'],
            ['name' => 'Servidor de Streaming / Medios', 'desc' => 'Transmite contenido de audio y video en tiempo real (Plex, RTMP).', 'link' => '/servers/entretenimient_y_multimedia/striming'],
        ]
    ],
    'virtualizacion' => [
        'title' => 'Virtualización y Arquitectura',
        'servers' => [
            ['name' => 'Servidor de Virtualización (Hipervisor)', 'desc' => 'Permite ejecutar múltiples servidores virtuales sobre un solo hardware físico.', 'link' => '/servers/virtualizacion_y_arquitectura/virtualizacion'],
            ['name' => 'Servidor Cluster', 'desc' => 'Conjunto de servidores que trabajan como una sola unidad para alta disponibilidad.', 'link' => '/servers/virtualizacion_y_arquitectura/cluster'],
            ['name' => 'Servidor Edge', 'desc' => 'Procesa datos cerca del usuario final para reducir la latencia (común en IoT).', 'link' => '/servers/virtualizacion_y_arquitectura/edge'],
            ['name' => 'Servidor de IoT', 'desc' => 'Gestiona la comunicación y datos de dispositivos inteligentes conectados.', 'link' => '/servers/virtualizacion_y_arquitectura/iot'],
        ]
    ],
];

$category = $categories[$slug] ?? null;
?>

<?php if ($category): ?>
    <div class="jumbotron shadow p-5 mb-5 bg-white rounded">
        <div class="text-center mb-5">
            <h2 class="display-5 text-primary fw-bold"><?php echo $category['title']; ?></h2>
            <p class="lead text-muted">Selecciona un tipo de servidor para explorar su funcionamiento y gestión.</p>
            <hr class="my-4 mx-auto" style="max-width: 100px;">
        </div>

        <div class="row g-4">
            <?php foreach ($category['servers'] as $server): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 category-server-card <?php echo isset($server['disabled']) ? 'opacity-75' : ''; ?>">
                        <div class="card-body d-flex flex-column text-center p-4">
                            <h5 class="card-title fw-bold mb-3"><?php echo $server['name']; ?></h5>
                            <p class="card-text text-muted flex-grow-1"><?php echo $server['desc']; ?></p>
                            <?php if (isset($server['disabled'])): ?>
                                <button class="btn btn-secondary mt-3 w-100" disabled>En construcción</button>
                            <?php else: ?>
                                <a href="<?php echo $server['link']; ?>" class="btn btn-primary mt-3 w-100 stretched-link">Explorar</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <style>
        .category-server-card { transition: transform 0.3s ease; }
        .category-server-card:hover:not(.opacity-75) { transform: translateY(-5px); }
    </style>
<?php else: ?>
    <div class="alert alert-warning mt-4">
        <h4 class="alert-heading">Categoría no encontrada</h4>
        <p>Lo sentimos, la categoría que buscas no existe o aún está en desarrollo.</p>
        <hr>
        <a href="/" class="btn btn-primary">Volver al Inicio</a>
    </div>
<?php endif; ?>

<?php include __DIR__ . '/layouts/footer.php'; ?>
