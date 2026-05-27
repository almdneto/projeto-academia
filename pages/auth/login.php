<!DOCTYPE html>
<html class="dark" lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login | Academia Management Pro</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/output.css" />

  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .electric-glow {
      box-shadow: 0 0 20px rgba(195, 244, 0, 0.3);
    }

    .press-in:active {
      transform: scale(0.98);
    }
  </style>
</head>

<body class="bg-background text-on-background font-body-md overflow-y-auto lg:overflow-hidden">
  <main class="flex min-h-screen lg:h-screen w-full">

    <!-- Hero -->
    <section class="hidden lg:block lg:w-3/5 relative">
      <img
        src="../../images/login-cadastro.png"
        alt="Atleta em ambiente de alta performance"
        class="absolute inset-0 w-full h-full object-cover object-top">

      <div class="absolute inset-0 bg-gradient-to-r from-background via-background/40 to-transparent"></div>

      <div class="absolute bottom-12 left-12 max-w-xl z-10">
        <div class="flex items-center gap-base mb-6">
          <span
            class="material-symbols-outlined text-primary-fixed text-[40px]"
            style="font-variation-settings:'FILL' 1;">
            fitness_center
          </span>

          <h1 class="font-headline-xl text-headline-xl text-primary leading-tight">
            ACADEMIA<br>
            <span class="text-primary-fixed">MANAGEMENT PRO</span>
          </h1>
        </div>

        <p class="font-body-lg text-body-lg text-secondary-fixed-dim opacity-80 leading-relaxed">
          A disciplina é a ponte entre metas e conquistas. Gerencie sua unidade com a precisão dos melhores atletas do mundo.
        </p>
      </div>
    </section>

    <!-- Formulário -->
    <section class="w-full lg:w-2/5 flex flex-col justify-center items-center bg-background border-l border-outline-variant/20 px-4 sm:px-6 lg:px-gutter py-8 lg:py-0">
      <div class="w-full max-w-md px-4 sm:px-6">

        <!-- Logo mobile -->
        <div class="mb-10 lg:hidden flex flex-col items-center">
          <span
            class="material-symbols-outlined text-primary-fixed text-[48px] mb-4"
            style="font-variation-settings:'FILL' 1;">
            fitness_center
          </span>

          <h2 class="font-headline-md text-headline-md text-primary">
            Academia
          </h2>

          <p class="font-label-lg text-label-lg text-primary-fixed tracking-widest uppercase">
            Management Pro
          </p>
        </div>

        <!-- Título -->
        <div class="mt-2 text-center lg:text-left">
          <h2 class="font-headline-lg text-headline-lg text-primary mb-2">
            Bem-vindo de volta
          </h2>

          <p class="font-body-md text-body-md text-on-surface-variant">
            Acesse sua conta para gerenciar sua unidade.
          </p>
        </div>

        <!-- Form -->
        <form class="space-y-6 mt-8" id="loginForm" method="post">

          <!-- E-mail -->
          <div class="space-y-2">
            <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-2" for="email">
              <span class="material-symbols-outlined text-[18px]">mail</span>
              E-mail
            </label>

            <input
              class="w-full bg-surface-container border border-outline-variant rounded-lg p-4 font-body-md text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed transition-all placeholder:text-on-surface-variant/40"
              id="email"
              name="email"
              type="email"
              placeholder="Digite seu e-mail"
              required>
          </div>

          <!-- Senha -->
          <div class="space-y-2">
            <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-2" for="password">
              <span class="material-symbols-outlined text-[18px]">lock</span>
              Senha
            </label>

            <div class="relative">
              <input
                class="w-full bg-surface-container border border-outline-variant rounded-lg p-4 pr-12 font-body-md text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed transition-all placeholder:text-on-surface-variant/40"
                id="password"
                name="password"
                type="password"
                placeholder="Digite sua senha"
                required>

              <button
                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary-fixed transition-colors"
                type="button"
                id="togglePassword"
                aria-label="Mostrar senha">
                <span class="material-symbols-outlined">visibility</span>
              </button>
            </div>
          </div>

          <!-- Lembrar / Esqueci -->
          <div class="flex items-center justify-between gap-4">
            <label class="flex items-center gap-3 cursor-pointer group">
              <div class="relative">
                <input class="peer hidden" type="checkbox" id="remember" name="remember">

                <div
                  class="w-5 h-5 border-2 border-outline-variant rounded peer-checked:bg-primary-fixed peer-checked:border-primary-fixed transition-all flex items-center justify-center cursor-pointer"
                  onclick="document.getElementById('remember').click()">
                  <span class="material-symbols-outlined text-[14px] text-on-primary-fixed opacity-0 peer-checked:opacity-100" onclick="document.getElementById('remember').click()">
                    check
                  </span>
                </div>
              </div>

              <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">
                Lembrar de mim
              </span>
            </label>

            <a class="font-label-lg text-label-lg text-primary-fixed-dim hover:text-primary-fixed transition-colors" href="#">
              Esqueci minha senha
            </a>
          </div>

          <!-- Botão -->
          <button
            class="w-full bg-primary-fixed text-on-primary-fixed font-headline-sm text-headline-sm py-4 rounded-lg flex items-center justify-center gap-2 press-in transition-all electric-glow hover:brightness-110 active:scale-95"
            type="submit">
            ENTRAR
            <span class="material-symbols-outlined">arrow_forward</span>
          </button>

          <!-- Divisor -->
          <div class="relative mt-8">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-outline-variant/30"></div>
            </div>

            <div class="relative flex justify-center text-label-sm uppercase">
              <span class="bg-background px-4 text-on-surface-variant">
                Ou continue com
              </span>
            </div>
          </div>

          <!-- Social -->
          <div class="grid grid-cols-2 gap-4">
            <button
              type="button"
              class="flex items-center justify-center gap-3 px-4 py-3 bg-surface-container border border-outline-variant rounded-lg hover:bg-surface-variant transition-colors">
              <img
                src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png"
                class="w-5 h-5"
                alt="Google">

              <span class="font-label-lg text-on-surface">
                Google
              </span>
            </button>

            <button
              type="button"
              class="flex items-center justify-center gap-3 px-4 py-3 bg-surface-container border border-outline-variant rounded-lg hover:bg-surface-variant transition-colors">
              <svg class="w-5 h-5 text-[#0077b5] fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>

              <span class="font-label-lg text-on-surface">
                LinkedIn
              </span>
            </button>
          </div>

          <!-- Link cadastro -->
          <div class="mt-6 text-center">
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              Ainda não tem uma conta?
              <a href="./register.php" class="text-primary-fixed-dim hover:text-primary-fixed font-semibold ml-1 transition-colors">
                Criar conta
              </a>
            </p>
          </div>
        </form>

        <!-- Rodapé -->
        <div class="mt-4 text-center">
          <p class="font-body-sm text-body-sm text-on-surface-variant">
            Problemas para acessar?
            <a class="text-primary hover:underline font-semibold ml-1" href="#">
              Fale com o suporte
            </a>
          </p>
        </div>

        <div class="mt-4 text-center">
          <a href="/" class="inline-flex items-center gap-2 text-label-sm text-on-surface-variant hover:text-primary-fixed transition-colors">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Voltar para a Home
          </a>
        </div>

      </div>
    </section>
  </main>

  <script>
    function makeToggle(btnId, inputId) {
      const button = document.getElementById(btnId);
      const input = document.getElementById(inputId);

      if (!button || !input) return;

      button.addEventListener('click', () => {
        const icon = button.querySelector('span');
        const isText = input.type === 'text';

        input.type = isText ? 'password' : 'text';
        icon.textContent = isText ? 'visibility' : 'visibility_off';
      });
    }

    makeToggle('togglePassword', 'password');

    const form = document.getElementById('loginForm');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const btn = form.querySelector('button[type="submit"]');
      const original = btn.innerHTML;

      btn.disabled = true;
      btn.innerHTML = `
        <div class="w-6 h-6 border-4 border-on-primary-fixed border-t-transparent rounded-full animate-spin"></div>
        PROCESSANDO...
      `;

      setTimeout(() => {
        btn.innerHTML = original;
        btn.disabled = false;
      }, 1500);
    });
  </script>
</body>

</html>