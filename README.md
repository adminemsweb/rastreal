# Rastreall

Site institucional em PHP 8.1+, sem dependências externas de backend.

## Estrutura

- `app/Controllers`: páginas e formulários
- `app/Http`: roteamento HTTP
- `app/Services`: regras de negócio e persistência
- `app/Support`: ambiente, CSRF e logs
- `config`: configuração da aplicação
- `views`: página e telas de erro
- `public`: única pasta exposta pela hospedagem
- `public/assets`: CSS, JavaScript e SVGs de interface
- `public/images`: logos e imagens públicas do site
- `storage`: leads e logs não versionados

## Rodar localmente

No Windows, dê dois cliques em `iniciar-site.bat`.

Ou execute no terminal:

```bash
copy .env.example .env
php -S localhost:8000 serve.php
```

Acesse `http://localhost:8000`. O endpoint de monitoramento é `/health`.

## Produção

Use a pasta `public/` como DocumentRoot, habilite `mod_rewrite` no Apache e conceda escrita ao PHP somente em `storage/`. Copie `.env.example` para `.env`, mantenha `APP_DEBUG=false` e use HTTPS.

Os leads são gravados em `storage/leads/leads.csv`. Para alto volume, substitua `LeadService` por banco de dados e CRM.

## Deploy no cPanel

O workflow manual `Publicar no cPanel` usa FTPS e os secrets `CPANEL_FTP_HOST`, `CPANEL_FTP_USERNAME`, `CPANEL_FTP_PASSWORD` e `CPANEL_FTP_DIRECTORY`. O domínio pode usar a pasta `public/` como DocumentRoot ou receber o projeto completo no `public_html`, onde o `.htaccess` da raiz protege o código interno.

## Docker

```bash
docker compose up -d --build
```

O site fica disponível em `http://localhost:8080`. Cada push na branch `main` publica também `ghcr.io/adminemsweb/rastreal:latest`. Em produção, use um proxy reverso com HTTPS apontando para a porta 8080.
