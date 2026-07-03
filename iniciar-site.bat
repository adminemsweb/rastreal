@echo off
cd /d "%~dp0"
where php >nul 2>nul
if errorlevel 1 (
  echo PHP nao foi encontrado no PATH do Windows.
  echo Instale o PHP ou adicione a pasta do php.exe ao PATH.
  pause
  exit /b 1
)
echo.
echo Rastreall iniciada em http://localhost:8000
echo Para encerrar, pressione Ctrl+C.
echo.
start "" http://localhost:8000
php -S 127.0.0.1:8000 serve.php
pause
