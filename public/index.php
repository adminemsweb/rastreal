<?php
declare(strict_types=1);

if (PHP_SAPI === 'cli-server') {
    $requestedFile = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
    if ($requestedFile !== false && str_starts_with($requestedFile, __DIR__ . DIRECTORY_SEPARATOR) && is_file($requestedFile)) return false;
}

require dirname(__DIR__) . '/app/bootstrap.php';

use App\Controllers\HomeController;
use App\Controllers\LeadController;
use App\Http\Router;

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->post('/contato', [LeadController::class, 'store']);
$router->get('/health', static fn() => json_response(['status' => 'ok', 'service' => config('app.name'), 'time' => gmdate('c')]));
$router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', request_path());
