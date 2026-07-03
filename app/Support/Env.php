<?php
declare(strict_types=1);
namespace App\Support;
final class Env { private static array $values = []; public static function load(string $path): void { if (!is_file($path)) return; foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) { if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) continue; [$key, $value] = array_map('trim', explode('=', $line, 2)); self::$values[$key] = trim($value, "\"'"); } } public static function get(string $key, mixed $default = null): mixed { $value = self::$values[$key] ?? $_ENV[$key] ?? getenv($key); if ($value === false || $value === null) return $default; return match (strtolower((string) $value)) { 'true' => true, 'false' => false, 'null' => null, default => $value }; } }
