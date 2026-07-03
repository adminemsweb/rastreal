<?php
declare(strict_types=1);
namespace App\Support;
final class Csrf { public static function token(): string { return $_SESSION['_token'] ??= bin2hex(random_bytes(32)); } public static function verify(string $token): bool { return isset($_SESSION['_token']) && hash_equals($_SESSION['_token'], $token); } }
