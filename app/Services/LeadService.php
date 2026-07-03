<?php
declare(strict_types=1);
namespace App\Services;
final class LeadService {
    public function create(array $input): array {
        if (mb_strlen($input['name']) < 2 || !preg_match('/\d{8,}/', preg_replace('/\D/', '', $input['phone']))) return ['ok' => false, 'message' => 'Informe seu nome e um telefone válido para continuarmos.'];
        if (mb_strlen($input['name']) > 100 || mb_strlen($input['company']) > 120) return ['ok' => false, 'message' => 'Revise os dados informados e tente novamente.'];
        if ((int) ($_SESSION['last_lead_at'] ?? 0) > time() - (int) \config('leads.cooldown', 20)) return ['ok' => false, 'message' => 'Recebemos um envio há poucos segundos. Aguarde um instante.'];
        $directory = BASE_PATH . '/storage/leads'; if (!is_dir($directory)) mkdir($directory, 0775, true);
        $handle = fopen($directory . '/leads.csv', 'ab'); if ($handle === false) throw new \RuntimeException('Não foi possível abrir o arquivo de leads.');
        try { if (!flock($handle, LOCK_EX)) throw new \RuntimeException('Não foi possível bloquear o arquivo de leads.'); fputcsv($handle, [date('c'), $this->safe($input['name']), $this->safe($input['phone']), $this->safe($input['company']), $this->safe($input['vehicles']), $_SERVER['REMOTE_ADDR'] ?? '']); fflush($handle); flock($handle, LOCK_UN); } finally { fclose($handle); }
        $_SESSION['last_lead_at'] = time(); return ['ok' => true, 'message' => 'Recebemos seus dados! Em breve, nosso time falará com você.'];
    }
    private function safe(string $value): string { return preg_match('/^[=+\-@]/', $value) ? "'" . $value : $value; }
}
