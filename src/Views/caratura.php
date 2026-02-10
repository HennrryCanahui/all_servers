<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8 text-center">
        <div class="card shadow p-5 bg-white rounded">
            <h1 class="display-4 border-bottom pb-3 mb-4">Carátula de Actividad</h1>
            <div class="text-start fs-5">
                <p><strong>Curso:</strong> Sistemas Operativos II</p>
                <p><strong>Catedrático:</strong> Erick Estuardo Alvarez Ramirez</p>
                <p><strong>Actividad:</strong> Desarrollo y despliegue de sitio web conectado a Base de Datos</p>
                <p><strong>Estudiante:</strong> Hennrry Geovanny Canahuí Gomez</p>
                <p><strong>Fecha:</strong> <?php echo date('d/m/Y'); ?></p>
            </div>
            <hr class="my-4">
            <p>Se ha autenticado exitosamente en el sistema.</p>
            <div class="mt-4">
                <a href="/" class="btn btn-outline-dark">Regresar al Home</a>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
