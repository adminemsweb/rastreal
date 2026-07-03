<?php
declare(strict_types=1);
namespace App\Support;
final class Logger { public static function error(\Throwable $error): void { $dir = BASE_PATH . '/storage/logs'; if (!is_dir($dir)) @mkdir($dir, 0775, true); @file_put_contents($dir . '/app.log', '[' . date('c') . '] ' . $error . PHP_EOL, FILE_APPEND | LOCK_EX); } }
