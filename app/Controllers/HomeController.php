<?php
declare(strict_types=1);
namespace App\Controllers;
final class HomeController { public function index(): void { $flash = $_SESSION['flash'] ?? []; unset($_SESSION['flash']); \view('home', ['formStatus' => $flash['status'] ?? null, 'formMessage' => $flash['message'] ?? null, 'old' => $flash['old'] ?? []]); } }
