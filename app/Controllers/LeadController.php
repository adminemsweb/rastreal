<?php
declare(strict_types=1);
namespace App\Controllers;
use App\Services\LeadService;
use App\Support\Csrf;
final class LeadController {
    public function store(): never {
        $input = array_map(static fn($value) => trim((string) $value), ['name' => $_POST['name'] ?? '', 'phone' => $_POST['phone'] ?? '', 'company' => $_POST['company'] ?? '', 'vehicles' => $_POST['vehicles'] ?? '']);
        if (!Csrf::verify((string) ($_POST['_token'] ?? ''))) $this->flash('error', 'Sua sessão expirou. Atualize a página e tente novamente.', $input);
        if (!empty($_POST['website'] ?? '')) redirect('/#contato');
        $result = (new LeadService())->create($input);
        $this->flash($result['ok'] ? 'success' : 'error', $result['message'], $result['ok'] ? [] : $input);
    }
    private function flash(string $status, string $message, array $old): never { $_SESSION['flash'] = compact('status', 'message', 'old'); redirect('/#contato'); }
}
