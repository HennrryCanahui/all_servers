<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-5">
        <?php if(isset($_GET['registered'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Registro exitoso. Ya puedes iniciar sesión.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Credenciales incorrectas o error en el sistema.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Iniciar Sesión</h4>
            </div>
            <div class="card-body">
                <form action="/login" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" required placeholder="ejemplo@correo.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Ingresar</button>
                        <a href="/register" class="btn btn-outline-primary">Registrar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Acceso restringido para usuarios registrados</small>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
