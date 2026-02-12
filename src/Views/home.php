<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="jumbotron shadow p-5 mb-5 bg-white rounded text-center">
    <h1 class="display-4 fw-bold text-primary">Bienvenido a WikiServer</h1>
    <p class="lead">Tu guía interactiva para entender el funcionamiento de los servidores de red.</p>
    <hr class="my-4">
    <p class="text-muted">Explora los diferentes tipos de servidores y cómo gestionan sus recursos a través de esta enciclopedia interactiva.</p>

    <div class="row mt-5 g-4">
        <?php
        $mainCategories = [
            ['slug' => 'infraestructura', 'title' => 'Infraestructura y Redes', 'desc' => 'DNS, DHCP, Proxy, NTP y más.'],
            ['slug' => 'almacenamiento', 'title' => 'Almacenamiento y Archivos', 'desc' => 'NAS, FTP, Bases de Datos, Backup.'],
            ['slug' => 'comunicacion', 'title' => 'Comunicación y Colaboración', 'desc' => 'Email, Chat, VoIP, Groupware.'],
            ['slug' => 'desarrollo', 'title' => 'Desarrollo y Aplicaciones', 'desc' => 'Web, Apps, Monitoreo, Seguridad.'],
            ['slug' => 'entretenimiento', 'title' => 'Entretenimiento y Multimedia', 'desc' => 'Juegos y Streaming.'],
            ['slug' => 'virtualizacion', 'title' => 'Virtualización y Arquitectura', 'desc' => 'Hipervisores, Cloud, IoT.'],
        ];
        foreach ($mainCategories as $cat):
        ?>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 category-card hover-effect">
                <div class="card-body text-center p-4">
                    <h5 class="card-title mb-3"><?php echo $cat['title']; ?></h5>
                    <p class="card-text text-muted"><?php echo $cat['desc']; ?></p>
                    <a href="/categoria/<?php echo $cat['slug']; ?>" class="btn btn-primary mt-3 stretched-link">Ver Servidores</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <style>
        .category-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .category-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
        .hover-effect:hover { background-color: #f8f9fa; }
    </style>

</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
