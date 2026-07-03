<?php
declare(strict_types=1);
namespace App\Http;
final class Router {
    private array $routes = [];
    public function get(string $path, callable|array $action): void { $this->routes['GET'][$path] = $action; }
    public function post(string $path, callable|array $action): void { $this->routes['POST'][$path] = $action; }
    public function dispatch(string $method, string $path): void { $action = $this->routes[strtoupper($method)][$path] ?? null; if ($action === null) { http_response_code(404); \view('errors.404'); return; } if (is_array($action) && is_string($action[0])) $action = [new $action[0](), $action[1]]; $action(); }
}
