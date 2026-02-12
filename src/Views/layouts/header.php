<?php include __DIR__ . '/../layouts/layout.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container d-flex justify-content-between align-items-center position-relative">
        <!-- Lado Izquierdo: Botón Volver -->
        <div class="d-flex align-items-center" style="min-width: 100px; z-index: 10;">
            <?php 
                $currentPath = $_SERVER['REQUEST_URI'] ?? '/';
                if ($currentPath !== '/' && $currentPath !== '/index.php'): 
            ?>
                <a href="javascript:history.back()" class="btn btn-sm btn-outline-light d-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i>
                    <span class="d-none d-md-inline">Volver</span>
                </a>
            <?php endif; ?>
        </div>

        <div class="position-absolute start-50 translate-middle-x text-center">
            <a class="navbar-brand m-0 fs-3 fw-bold" href="/">WikiServer</a>
        </div>

        <div class="d-flex justify-content-end align-items-center" style="min-width: 100px; z-index: 10;">
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center gap-2" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-5"></i>
                        <span class="d-none d-lg-inline"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userMenu">
                        <li><a class="dropdown-item" href="/caratura"><i class="bi bi-file-earmark-person me-2"></i>Ver Carátula</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="/logout"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a href="/login" class="btn btn-outline-light d-flex align-items-center gap-2">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="d-none d-sm-inline">Login</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="container mt-4">