<?php
declare(strict_types=1);
function env(string $key, mixed $default = null): mixed { return App\Support\Env::get($key, $default); }
function config(string $key, mixed $default = null): mixed { static $files = []; [$file, $item] = array_pad(explode('.', $key, 2), 2, null); if (!isset($files[$file])) $files[$file] = require BASE_PATH . '/config/' . $file . '.php'; return $item === null ? $files[$file] : ($files[$file][$item] ?? $default); }
function e(mixed $value): string { return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function view(string $name, array $data = []): void { extract($data, EXTR_SKIP); require BASE_PATH . '/views/' . str_replace('.', '/', $name) . '.php'; }
function redirect(string $path): never { header('Location: ' . $path, true, 303); exit; }
function json_response(array $data, int $status = 200): never { http_response_code($status); header('Content-Type: application/json; charset=utf-8'); echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); exit; }
function request_path(): string { $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH); return '/' . trim((string) $path, '/'); }
function csrf_field(): string { return '<input type="hidden" name="_token" value="' . e(App\Support\Csrf::token()) . '">'; }
