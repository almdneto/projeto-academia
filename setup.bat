@echo off
title Setup Projeto Academia

echo ============================
echo Setup Projeto Academia
echo ============================

:: -------------------------------
:: Verificar se npm está instalado
:: -------------------------------
where npm >nul 2>&1
if errorlevel 1 (
    echo ERRO: npm nao encontrado. Instale o Node.js antes de continuar.
    pause
    exit /b 1
) else (
    echo npm encontrado, continuando...
)

:: -------------------------------
:: Copiar .env se nao existir
:: -------------------------------
if not exist ".env" (
    if exist ".env.example" (
        echo Criando .env a partir de .env.example...
        copy /Y ".env.example" ".env" >nul
    ) else (
        echo ERRO: .env.example nao encontrado.
        pause
        exit /b 1
    )
) else (
    echo .env ja existe, pulando esta etapa.
)

:: -------------------------------
:: Instalar dependencias Node.js
:: -------------------------------
if not exist "node_modules" (
    echo Instalando dependencias Node...
    npm install
    if errorlevel 1 (
        echo ERRO: falha ao instalar dependencias Node.
        pause
        exit /b 1
    )
) else (
    echo node_modules ja existe, pulando npm install.
)

:: -------------------------------
:: Gerar CSS do Tailwind
:: -------------------------------
echo Gerando CSS do Tailwind...
npm run build:css
if errorlevel 1 (
    echo ERRO: falha ao compilar o CSS.
    pause
    exit /b 1
)

:: -------------------------------
:: Verificar se Docker está instalado
:: -------------------------------
where docker >nul 2>&1
if errorlevel 1 (
    echo ERRO: Docker nao encontrado. Instale o Docker antes de continuar.
    pause
    exit /b 1
) else (
    echo Docker encontrado, continuando...
)

:: -------------------------------
:: Iniciar Docker
:: -------------------------------
echo Iniciando containers Docker...
docker-compose up -d
if errorlevel 1 (
    echo ERRO: falha ao iniciar o Docker.
    pause
    exit /b 1
)

echo.
echo Setup concluido com sucesso!
echo Acesse http://localhost:8080
pause