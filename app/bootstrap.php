<?php
declare(strict_types=1);
define('BASE_PATH', dirname(__DIR__));
spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) return;
    $path = BASE_PATH . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($path)) require $path;
});
require BASE_PATH . '/app/helpers.php';
App\Support\Env::load(BASE_PATH . '/.env');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_name('rastreall_session');
    session_set_cookie_params(['httponly' => true, 'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'), 'samesite' => 'Lax', 'path' => '/']);
    session_start();
}
date_default_timezone_set((string) config('app.timezone', 'America/Sao_Paulo'));
set_exception_handler(static function (Throwable $error): void {
    App\Support\Logger::error($error); http_response_code(500);
    if ((bool) config('app.debug', false)) { echo '<pre>' . e((string) $error) . '</pre>'; return; }
    require BASE_PATH . '/views/errors/500.php';
});
