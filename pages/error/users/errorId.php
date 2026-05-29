<!DOCTYPE html>
<html class="dark" lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link rel="stylesheet" href="../../../css/output.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet" />
</head>

<body class="bg-background text-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed min-h-screen flex items-center justify-center overflow-hidden relative">

  <!-- Ambient lighting -->
  <div class="fixed w-[420px] h-[420px] rounded-full pointer-events-none" style="top:-100px;right:-60px;background:#c3f400;filter:blur(110px);opacity:0.05;"></div>
  <div class="fixed w-[280px] h-[280px] rounded-full pointer-events-none" style="bottom:-80px;left:80px;background:#c3f400;filter:blur(100px);opacity:0.035;"></div>

  <!-- Grid background -->
  <div class="fixed inset-0 pointer-events-none" style="background-image:linear-gradient(rgba(195,244,0,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(195,244,0,0.025) 1px,transparent 1px);background-size:40px 40px;"></div>

  <!-- Content -->
  <div class="relative z-10 flex flex-col items-center text-center px-6">

    <!-- Code -->
    <div class="relative mb-8 select-none">
      <span class="font-headline-xl text-headline-xl block" style="font-family:Montserrat,sans-serif;font-size:clamp(96px,18vw,160px);font-weight:800;color:#c3f400;letter-spacing:-0.04em;line-height:1;opacity:0.12;">404</span>
      <span class="font-headline-xl text-headline-xl absolute inset-0 flex items-center justify-center" style="font-family:Montserrat,sans-serif;font-size:clamp(96px,18vw,160px);font-weight:800;color:#c3f400;letter-spacing:-0.04em;line-height:1;">404</span>
    </div>

    <!-- Icon + line -->
    <div class="flex items-center gap-4 mb-8">
      <div class="h-px w-16 bg-surface-variant"></div>
      <span class="material-symbols-outlined text-primary-fixed" style="font-size:22px;font-variation-settings:'FILL' 0,'wght' 300,'GRAD' 0,'opsz' 24;">search_off</span>
      <div class="h-px w-16 bg-surface-variant"></div>
    </div>

    <!-- Text -->
    <h1 class="font-headline-xl text-headline-xl mb-3" style="font-family:Montserrat,sans-serif;font-size:22px;font-weight:800;text-transform:uppercase;letter-spacing:0.04em;color:#e4e2e1;">
      Página não encontrada
    </h1>
    <p class="text-on-surface-variant mb-10 max-w-sm" style="font-size:14px;line-height:1.7;">
      A rota que você tentou acessar não existe ou foi removida. Verifique o endereço ou volte ao painel.
    </p>

    <!-- Actions -->
    <div class="flex flex-col sm:flex-row gap-3 w-full max-w-xs">
      <a href="/pages/users/users.php" class="flex-1 flex items-center justify-center gap-2 rounded py-3 px-6 no-underline transition-all active:scale-[0.98]"
        style="background:#c3f400;color:#161e00;font-family:Montserrat,sans-serif;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:0.1em;">
        <span class="material-symbols-outlined" style="font-size:17px;font-variation-settings:'FILL' 0,'wght' 300,'GRAD' 0,'opsz' 24;">dashboard</span>
        Ir ao painel
      </a>
    </div>

    <!-- Footer note -->
    <p class="mt-12" style="font-size:11px;color:#353535;letter-spacing:0.04em;text-transform:uppercase;font-family:Montserrat,sans-serif;font-weight:700;">
      Power &amp; Performance &mdash; Admin
    </p>

  </div>

</body>
</html>