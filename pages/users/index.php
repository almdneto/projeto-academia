<?php
require_once __DIR__ . '/../../includes/auth/auth_check.php';
require_once __DIR__ . '/../../includes/admin/user_check.php';
require_once __DIR__ . '/functions/functions.php';

$userFunctions = new UserFunctions();
$users = $userFunctions->getUsers($conn);

$erro = $_SESSION["erro_message"] ?? "";
unset($_SESSION["erro_message"]);
$sucess = $_SESSION["success_message"] ?? "";
unset($_SESSION["success_message"]);

?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Power &amp; Performance - Gestão de Usuários</title>
  <link rel="stylesheet" href="/css/output.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

  <style>
    .alert-error {
      border: 1px solid #ef4444 !important;
      background: rgba(239, 68, 68, 0.08) !important;
      color: #fecaca !important;
      border-radius: 8px;
      padding: 16px;
      font-weight: 600;
    }

    .alert-success {
      border: 1px solid #10b981 !important;
      background: rgba(16, 185, 129, 0.08) !important;
      color: #34d399 !important;
      border-radius: 8px;
      padding: 16px;
      font-weight: 600;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .active-nav-glow {
      box-shadow: 0 0 15px rgba(195, 244, 0, 0.15);
    }

    .glass-card {
      background: rgba(244, 244, 245, 0.05);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex">
  <!-- SideNavBar -->
  <aside class="fixed left-0 top-0 h-full flex flex-col z-40 border-r border-surface-variant bg-surface dark:bg-surface h-screen w-64 shadow-sm hidden md:flex">
    <div class="p-6">
      <h1 class="font-headline-sm text-headline-sm font-bold text-primary-fixed">Admin Panel</h1>
      <p class="text-on-surface-variant  text-label-sm opacity-70">Power &amp; Performance</p>
    </div>
    <nav class="flex-1 mt-4">
      <a class="flex items-center gap-3 px-4 py-3 text-secondary-fixed-dim hover:bg-surface-container-highest dark:hover:bg-surface-container-highest hover:text-primary-fixed transition-all" href="#">
        <span class="material-symbols-outlined">dashboard</span>
        <span class="font-label-lg text-label-lg">Dashboard</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-secondary-fixed-dim hover:bg-surface-container-highest dark:hover:bg-surface-container-highest hover:text-primary-fixed transition-all" href="#">
        <span class="material-symbols-outlined">category</span>
        <span class="font-label-lg text-label-lg">Categorias</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-secondary-fixed-dim hover:bg-surface-container-highest dark:hover:bg-surface-container-highest hover:text-primary-fixed transition-all" href="#">
        <span class="material-symbols-outlined">inventory_2</span>
        <span class="font-label-lg text-label-lg">Produtos</span>
      </a>
      <!-- Active Tab: Usuários -->
      <a class="flex items-center gap-3 px-4 py-3 text-primary-fixed border-l-4 border-primary-fixed bg-primary-container/10 font-bold" href="#">
        <span class="material-symbols-outlined">group</span>
        <span class="font-label-lg text-label-lg">Usuários</span>
      </a>
    </nav>
    <div class="p-4 mt-auto">
      <div class="mt-6 pt-4 border-t border-surface-variant">
        <a class="flex items-center gap-3 px-4 py-3 text-secondary-fixed-dim hover:text-error transition-colors" href="/pages/auth/logout.php">
          <span class="material-symbols-outlined">logout</span>
          <span class="font-label-lg text-label-lg">Logout</span>
        </a>
      </div>
    </div>
  </aside>
  <!-- Main Content Area -->
  <main class="flex-1 md:ml-64 flex flex-col min-h-screen bg-background">
    <!-- TopNavBar -->
    <header class="flex justify-between items-center px-container-desktop w-full border-b border-surface-variant bg-background dark:bg-background h-16 sticky top-0 z-30">
      <div class="flex items-center gap-4">
        <div class="font-headline-md text-headline-md ml-4 font-extrabold text-primary-fixed italic tracking-tighter">
          POWER &amp; PERFORMANCE
        </div>
      </div>
      <div class="flex items-center gap-6">

      </div>
    </header>
    <!-- Canvas -->
    <section class="p-container-desktop space-y-gutter">
      <!-- Page Header -->
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
          <h2 class="font-headline-lg ml-4 text-headline-lg text-primary text-primary-fixed-dim">Gestão de Usuários</h2>
          <p class="text-on-surface-variant ml-4 font-body-md">Visualize e gerencie as permissões de acesso da sua equipe.</p>
        </div>
        <a href="./actions/create.php" class="flex items-center gap-2 mr-4 bg-primary-fixed text-on-primary-fixed px-6 py-3 rounded-lg font-bold hover:brightness-110 active:scale-95 transition-all shadow-lg shadow-primary-fixed/10">
          <span class="material-symbols-outlined">person_add</span>
          <span>Novo Usuário</span>
        </a>
      </div>

      <?php if ($erro !== ""): ?>
        <div class="m-4 alert-error">
          <?php echo htmlspecialchars($erro); ?>
        </div>
      <?php endif; ?>

      <?php if ($sucess !== ""): ?>
        <div class="m-4 alert-success">
          <?php echo htmlspecialchars($sucess); ?>
        </div>
      <?php endif; ?>

      <!-- User Table -->
      <div class="bg-surface-container-lowest rounded-xl mx-4 border border-surface-variant/50 overflow-hidden shadow-2xl">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse ">
            <thead>
              <tr class="bg-surface-container border-b border-surface-variant ">
                <th class="px-6 py-2 font-label-lg text-on-surface-variant uppercase tracking-wider">Usuário</th>
                <th class="px-6 py-2 font-label-lg text-on-surface-variant uppercase tracking-wider">E-mail</th>
                <th class="px-6 py-2 font-label-lg text-on-surface-variant uppercase tracking-wider">Nível de Acesso</th>
                <th class="px-6 py-2 font-label-lg text-on-surface-variant uppercase tracking-wider text-right">Ações</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-surface-variant/30">

              <?php foreach ($users as $user): ?>
                <form action="./actions/delete.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                  <tr class="hover:bg-primary-fixed/5 mx-4 transition-colors group">
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-3">
                        <div>
                          <p class="font-headline-sm text-sm text-primary"><?= $user->name ?></p>
                          <p class="text-label-sm text-on-surface-variant">ID: #<?= $user->id ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-body-sm text-on-surface-variant"><?= $user->email ?></td>
                    <td class="px-6 py-4">
                      <span class="px-3 py-1 rounded-full bg-secondary-container text-secondary-fixed text-[10px] font-bold uppercase tracking-widest"><?= $user->level ?></span>
                    </td>
                    <td class="px-6 py-4 text-right">
                      <div class="flex items-center justify-end gap-2">
                        <a href="./actions/edit.php?id=<?= $user->id ?>" class="p-2 rounded-lg hover:bg-surface-container-highest text-on-surface-variant hover:text-primary-fixed transition-all active:scale-90">
                          <span class="material-symbols-outlined">edit</span>
                        </a>
                        <input type="hidden" name="id" value="<?= $user->id ?>">
                        <button type="submit" class="p-2 rounded-lg hover:bg-surface-container-highest text-on-surface-variant hover:text-error transition-all active:scale-90">
                          <span class="material-symbols-outlined">delete</span>
                        </button>
                      </div>
                    </td>
                  </tr>
                </form>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between ">
        </div>
      </div>
    </section>
  </main>
  <!-- Mobile Navigation (Bottom Bar) -->
  <nav class="md:hidden fixed bottom-0 left-0 w-full bg-surface-container-low border-t border-surface-variant flex justify-around items-center h-16 z-50">
    <button class="flex flex-col items-center gap-1 text-on-surface-variant">
      <span class="material-symbols-outlined">dashboard</span>
      <span class="text-[10px] font-bold uppercase tracking-tighter">Dash</span>
    </button>
    <button class="flex flex-col items-center gap-1 text-primary-fixed">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
      <span class="text-[10px] font-bold uppercase tracking-tighter">Usuários</span>
    </button>
    <div class="relative -top-4">
      <button class="w-12 h-12 bg-primary-fixed text-on-primary-fixed rounded-full shadow-lg shadow-primary-fixed/30 flex items-center justify-center">
        <span class="material-symbols-outlined">add</span>
      </button>
    </div>
    <button class="flex flex-col items-center gap-1 text-on-surface-variant">
      <span class="material-symbols-outlined">inventory_2</span>
      <span class="text-[10px] font-bold uppercase tracking-tighter">Prod</span>
    </button>
    <button class="flex flex-col items-center gap-1 text-on-surface-variant">
      <span class="material-symbols-outlined">settings</span>
      <span class="text-[10px] font-bold uppercase tracking-tighter">Conf</span>
    </button>
  </nav>
  <script>
    // Simple interactivity for demonstration
    document.querySelectorAll('tr').forEach(row => {
      row.addEventListener('mousedown', () => {
        row.classList.add('scale-[0.995]', 'duration-75');
      });
      row.addEventListener('mouseup', () => {
        row.classList.remove('scale-[0.995]');
      });
    });

    // Hover animation for buttons
    const primaryBtns = document.querySelectorAll('.bg-primary-fixed');
    primaryBtns.forEach(btn => {
      btn.addEventListener('mouseenter', () => {
        btn.style.boxShadow = '0 0 20px rgba(195, 244, 0, 0.4)';
      });
      btn.addEventListener('mouseleave', () => {
        btn.style.boxShadow = '';
      });
    });
  </script>
</body>

</html>