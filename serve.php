<?php
declare(strict_types=1);

// Router de desenvolvimento. Em produção, aponte o DocumentRoot para /public.
$public = __DIR__ . DIRECTORY_SEPARATOR . 'public';
$path = rawurldecode((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$file = realpath($public . str_replace('/', DIRECTORY_SEPARATOR, $path));

if ($file !== false && str_starts_with($file, $public . DIRECTORY_SEPARATOR) && is_file($file)) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $types = [
        'css' => 'text/css; charset=utf-8',
        'js' => 'application/javascript; charset=utf-8',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'ico' => 'image/x-icon',
        'woff2' => 'font/woff2',
    ];
    if ($extension !== 'php') {
        header('Content-Type: ' . ($types[$extension] ?? 'application/octet-stream'));
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}

require $public . DIRECTORY_SEPARATOR . 'index.php';
