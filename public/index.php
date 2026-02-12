<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Config\Database;

require __DIR__ . '/../vendor/autoload.php';

// Iniciar sesión de forma segura
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$app = AppFactory::create();

// 1. Permite a Slim procesar datos de formularios $_POST
$app->addBodyParsingMiddleware();

// 2. Activa el sistema de búsqueda de rutas
$app->addRoutingMiddleware();

// 3. Manejador de errores (activado para ver detalles en los logs de Railway)
$app->addErrorMiddleware(true, true, true);

// RUTA: Homepage
$app->get('/', function (Request $request, Response $response) {
    ob_start();
    include __DIR__ . '/../src/Views/home.php';
    $html = ob_get_clean();
    $response->getBody()->write($html);
    return $response;
});

// RUTA: Servidores Genéricos (Dinámicos)
$app->group('/servers', function ($group) {
    $group->get('/{categoria}/{servicio}', function (Request $request, Response $response, $args) {
        $categoria = $args['categoria'];
        $servicio = $args['servicio'];

        $rutaVista = __DIR__ . "/../src/Views/servers/{$categoria}/{$servicio}.php";

        if (!file_exists($rutaVista)) {
            $response->getBody()->write("Vista no encontrada en: " . htmlspecialchars($rutaVista));
            return $response->withStatus(404);
        }

        ob_start();
        include $rutaVista;
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    });
});

// RUTA: Categorías
$app->get('/categoria/{slug}', function (Request $request, Response $response, array $args) {
    $slug = $args['slug'];
    ob_start();
    include __DIR__ . '/../src/Views/category.php';
    $html = ob_get_clean();
    $response->getBody()->write($html);
    return $response;
});

// RUTA: Login (GET)
$app->get('/login', function (Request $request, Response $response) {
    ob_start();
    include __DIR__ . '/../src/Views/login.php';
    $html = ob_get_clean();
    $response->getBody()->write($html);
    return $response;
});

// RUTA: Login (POST)
$app->post('/login', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';

    $db = (new Database())->getConnection();
    if (!$db) {
        return $response->withHeader('Location', '/login?error=db')->withStatus(302);
    }

    $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    // Agregada barra invertida \PDO para que PHP encuentre la constante global
    $user = $stmt->fetch(\PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        return $response->withHeader('Location', '/caratura')->withStatus(302);
    }

    return $response->withHeader('Location', '/login?error=auth')->withStatus(302);
});

// RUTA: Registro (GET)
$app->get('/register', function (Request $request, Response $response) {
    ob_start();
    include __DIR__ . '/../src/Views/register.php';
    $html = ob_get_clean();
    $response->getBody()->write($html);
    return $response;
});

// RUTA: Registro (POST)
$app->post('/register', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $name = $data['name'] ?? '';
    $email = $data['email'] ?? '';
    $password = password_hash($data['password'] ?? '', PASSWORD_DEFAULT);

    $db = (new Database())->getConnection();
    if (!$db) {
        return $response->withHeader('Location', '/register?error=db')->withStatus(302);
    }

    try {
        $stmt = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);
        return $response->withHeader('Location', '/login?registered=1')->withStatus(302);
    } catch (\PDOException $e) {
        return $response->withHeader('Location', '/register?error=exists')->withStatus(302);
    }
});

// RUTA: Carátula (Protegida)
$app->get('/caratura', function (Request $request, Response $response) {
    if (!isset($_SESSION['user_id'])) {
        return $response->withHeader('Location', '/login')->withStatus(302);
    }

    ob_start();
    include __DIR__ . '/../src/Views/caratura.php';
    $html = ob_get_clean();
    $response->getBody()->write($html);
    return $response;
});

// RUTA: Logout
$app->get('/logout', function (Request $request, Response $response) {
    session_destroy();
    return $response->withHeader('Location', '/')->withStatus(302);
});

$app->run();