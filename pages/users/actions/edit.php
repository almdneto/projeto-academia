<?php

require_once __DIR__ . '/../functions/functions.php';
$userFunctions = new UserFunctions();
$user = $userFunctions->getUserById($conn, $_GET['id'] ?? header('Location: /pages/error/users/errorId.php'));



?>

<!DOCTYPE html>
<html class="dark" lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet" />
  <style>
    /* ── Reset & Base ── */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --color-background: #131313;
      --color-surface: #131313;
      --color-surface-variant: #353535;
      --color-surface-container-low: #1b1c1c;
      --color-surface-container: #1f2020;
      --color-surface-container-high: #2a2a2a;
      --color-surface-container-highest: #353535;
      --color-on-surface: #e4e2e1;
      --color-on-surface-variant: #9a9f87;
      --color-primary-fixed: #c3f400;
      --color-primary-fixed-dim: #abd600;
      --color-on-primary-fixed: #161e00;
      --color-secondary: #c6c6c7;
      --color-secondary-fixed: #e2e2e3;
      --color-secondary-fixed-dim: #c6c6c7;
      --color-error: #ffb4ab;
      --sidebar-w: 240px;
    }

    html,
    body {
      height: 100%;
    }

    body {
      font-family: Inter, sans-serif;
      background: var(--color-background);
      color: var(--color-on-surface);
      font-size: 15px;
      line-height: 1.5;
      display: flex;
      overflow: hidden;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
      font-size: 20px;
      line-height: 1;
      display: inline-flex;
      align-items: center;
    }

    /* ── Sidebar ── */
    .sidebar {
      width: var(--sidebar-w);
      flex-shrink: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      background: var(--color-surface-container-low);
      border-right: 1px solid #242424;
      position: sticky;
      top: 0;
    }

    .sidebar-brand {
      padding: 28px 20px 24px;
      border-bottom: 1px solid #242424;
    }

    .sidebar-brand h1 {
      font-family: Montserrat, sans-serif;
      font-size: 15px;
      font-weight: 800;
      color: var(--color-primary-fixed);
      letter-spacing: 0.02em;
      text-transform: uppercase;
    }

    .sidebar-brand p {
      font-size: 11px;
      color: var(--color-on-surface-variant);
      margin-top: 3px;
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    .sidebar-nav {
      flex: 1;
      padding: 12px 0;
      overflow-y: auto;
    }

    .nav-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 20px;
      color: var(--color-on-surface-variant);
      text-decoration: none;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 0.01em;
      transition: color 0.15s, background 0.15s;
      border-left: 2px solid transparent;
      position: relative;
    }

    .nav-item:hover {
      color: var(--color-on-surface);
      background: rgba(255, 255, 255, 0.04);
    }

    .nav-item.active {
      color: var(--color-primary-fixed);
      background: rgba(195, 244, 0, 0.07);
      border-left-color: var(--color-primary-fixed);
    }

    .sidebar-footer {
      padding: 12px 0;
      border-top: 1px solid #242424;
    }

    .sidebar-footer .nav-item:hover {
      color: var(--color-error);
    }

    /* ── Main Shell ── */
    .shell {
      flex: 1;
      display: flex;
      flex-direction: column;
      height: 100vh;
      overflow: hidden;
    }

    /* ── Topbar ── */
    .topbar {
      height: 56px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 28px;
      border-bottom: 1px solid #242424;
      background: var(--color-background);
      position: sticky;
      top: 0;
      z-index: 30;
    }

    .topbar-brand {
      font-family: Montserrat, sans-serif;
      font-size: 13px;
      font-weight: 800;
      color: var(--color-primary-fixed);
      letter-spacing: 0.12em;
      text-transform: uppercase;
      opacity: 0.7;
    }

    .topbar-actions {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .search-wrap {
      position: relative;
    }

    .search-wrap .material-symbols-outlined {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 16px;
      color: var(--color-on-surface-variant);
    }

    .search-wrap input {
      background: var(--color-surface-container);
      border: 1px solid #2e2e2e;
      border-radius: 6px;
      padding: 7px 14px 7px 34px;
      font-size: 13px;
      color: var(--color-on-surface);
      width: 220px;
      outline: none;
      transition: border-color 0.15s;
      font-family: Inter, sans-serif;
    }

    .search-wrap input::placeholder {
      color: var(--color-on-surface-variant);
      opacity: 0.6;
    }

    .search-wrap input:focus {
      border-color: rgba(195, 244, 0, 0.4);
    }

    .icon-btn {
      background: none;
      border: none;
      cursor: pointer;
      color: var(--color-on-surface-variant);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 4px;
      border-radius: 6px;
      transition: color 0.15s, background 0.15s;
    }

    .icon-btn:hover {
      color: var(--color-primary-fixed);
      background: rgba(195, 244, 0, 0.08);
    }

    /* ── Page Content ── */
    .page {
      flex: 1;
      overflow-y: auto;
      padding: 36px 40px 60px;
      scroll-behavior: smooth;
    }

    /* ── Page Header ── */
    .back-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      font-weight: 600;
      color: var(--color-on-surface-variant);
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 20px;
      transition: color 0.15s;
    }

    .back-link:hover {
      color: var(--color-primary-fixed);
    }

    .back-link .material-symbols-outlined {
      font-size: 15px;
    }

    .page-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 24px;
      margin-bottom: 36px;
    }

    .page-title {
      font-family: Montserrat, sans-serif;
      font-size: 26px;
      font-weight: 800;
      color: var(--color-on-surface);
      letter-spacing: -0.02em;
      text-transform: uppercase;
      line-height: 1.1;
    }

    .page-title span {
      color: var(--color-primary-fixed);
    }

    .page-subtitle {
      font-size: 13px;
      color: var(--color-on-surface-variant);
      margin-top: 6px;
    }

    .security-badge {
      display: flex;
      align-items: center;
      gap: 14px;
      background: var(--color-surface-container-high);
      border: 1px solid #2e2e2e;
      border-left: 3px solid var(--color-primary-fixed);
      border-radius: 8px;
      padding: 14px 18px;
      flex-shrink: 0;
    }

    .security-badge .material-symbols-outlined {
      font-size: 22px;
      color: var(--color-primary-fixed);
    }

    .security-badge strong {
      display: block;
      font-size: 12px;
      font-weight: 700;
      color: var(--color-on-surface);
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    .security-badge small {
      font-size: 11px;
      color: var(--color-on-surface-variant);
    }

    /* ── Form Card ── */
    .form-card {
      max-width: 820px;
      background: var(--color-surface-container-low);
      border: 1px solid #252525;
      border-radius: 12px;
      padding: 36px;
      position: relative;
      overflow: hidden;
    }

    /* Grid pattern overlay */
    .form-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(195, 244, 0, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(195, 244, 0, 0.03) 1px, transparent 1px);
      background-size: 32px 32px;
      pointer-events: none;
    }

    form {
      position: relative;
      z-index: 1;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .col-full {
      grid-column: 1 / -1;
    }

    /* ── Form Fields ── */
    .field {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }

    label {
      font-size: 11px;
      font-weight: 700;
      color: var(--color-on-surface-variant);
      text-transform: uppercase;
      letter-spacing: 0.07em;
    }

    .field:focus-within label {
      color: var(--color-primary-fixed);
    }

    .input-wrap {
      position: relative;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      background: var(--color-surface-container);
      border: 1px solid #2e2e2e;
      border-radius: 7px;
      padding: 11px 14px;
      font-size: 14px;
      color: var(--color-on-surface);
      font-family: Inter, sans-serif;
      outline: none;
      appearance: none;
      -webkit-appearance: none;
      transition: border-color 0.15s, box-shadow 0.15s;
    }

    input::placeholder {
      color: var(--color-on-surface-variant);
      opacity: 0.45;
    }

    input:focus,
    select:focus {
      border-color: rgba(195, 244, 0, 0.5);
      box-shadow: 0 0 0 3px rgba(195, 244, 0, 0.08);
    }

    /* Autofill override */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {
      -webkit-text-fill-color: var(--color-on-surface);
      -webkit-box-shadow: 0 0 0px 1000px var(--color-surface-container) inset;
    }

    .input-icon-right {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: var(--color-on-surface-variant);
      display: flex;
      padding: 2px;
      transition: color 0.15s;
    }

    .input-icon-right:hover {
      color: var(--color-primary-fixed);
    }

    input[type="password"] {
      padding-right: 42px;
    }

    .select-wrap {
      position: relative;
    }

    .select-arrow {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      color: var(--color-on-surface-variant);
    }

    select {
      padding-right: 36px;
      cursor: pointer;
    }

    option {
      background: var(--color-surface-container-high);
    }

    /* ── Radio Group ── */
    .radio-group {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 10px 0;
    }

    .radio-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      padding: 8px 14px;
      border-radius: 6px;
      border: 1px solid #2e2e2e;
      background: var(--color-surface-container);
      transition: all 0.15s;
      font-size: 13px;
      font-weight: 500;
      color: var(--color-on-surface-variant);
      text-transform: none;
      letter-spacing: 0;
    }

    .radio-label:has(input:checked) {
      border-color: rgba(195, 244, 0, 0.5);
      background: rgba(195, 244, 0, 0.07);
      color: var(--color-primary-fixed);
    }

    .radio-label:hover:not(:has(input:checked)) {
      border-color: #3e3e3e;
      color: var(--color-on-surface);
    }

    .radio-label input[type="radio"] {
      width: 14px;
      height: 14px;
      padding: 0;
      border-radius: 50%;
      accent-color: var(--color-primary-fixed);
      flex-shrink: 0;
      cursor: pointer;
    }

    .radio-label input[type="radio"]:focus {
      box-shadow: none;
      border-color: transparent;
    }

    /* ── Divider ── */
    .form-divider {
      grid-column: 1 / -1;
      height: 1px;
      background: #252525;
      margin: 4px 0;
    }

    /* ── Actions ── */
    .form-actions {
      grid-column: 1 / -1;
      display: flex;
      gap: 12px;
      margin-top: 8px;
    }

    .btn-primary {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: var(--color-primary-fixed);
      color: var(--color-on-primary-fixed);
      border: none;
      border-radius: 7px;
      padding: 13px 24px;
      font-family: Montserrat, sans-serif;
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      cursor: pointer;
      transition: background 0.15s, transform 0.1s, box-shadow 0.15s;
      box-shadow: 0 0 0 rgba(195, 244, 0, 0);
    }

    .btn-primary:hover {
      background: var(--color-primary-fixed-dim);
      box-shadow: 0 4px 24px rgba(195, 244, 0, 0.2);
    }

    .btn-primary:active {
      transform: scale(0.98);
    }

    .btn-primary .material-symbols-outlined {
      font-size: 18px;
    }

    .btn-ghost {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: transparent;
      color: var(--color-on-surface-variant);
      border: 1px solid #2e2e2e;
      border-radius: 7px;
      padding: 13px 24px;
      font-family: Inter, sans-serif;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      cursor: pointer;
      transition: all 0.15s;
      white-space: nowrap;
    }

    .btn-ghost:hover {
      border-color: #3e3e3e;
      color: var(--color-on-surface);
      background: rgba(255, 255, 255, 0.04);
    }

    /* ── Footer Notes ── */
    .footer-notes {
      max-width: 820px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 24px;
    }

    .note-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      padding: 14px;
      background: var(--color-surface-container-low);
      border: 1px solid #202020;
      border-radius: 8px;
    }

    .note-item .material-symbols-outlined {
      font-size: 16px;
      color: var(--color-primary-fixed-dim);
      opacity: 0.7;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .note-item p {
      font-size: 11px;
      line-height: 1.55;
      color: var(--color-on-surface-variant);
    }

    /* ── Ambient ── */
    .ambient {
      position: fixed;
      pointer-events: none;
      border-radius: 50%;
      filter: blur(100px);
      opacity: 0.06;
      background: var(--color-primary-fixed);
    }

    .ambient-tl {
      width: 400px;
      height: 400px;
      top: -120px;
      right: -80px;
    }

    .ambient-bl {
      width: 260px;
      height: 260px;
      bottom: -80px;
      left: 100px;
      opacity: 0.04;
    }

    /* ── Success state ── */
    .btn-primary.success {
      background: #22c55e;
      color: #fff;
      box-shadow: 0 4px 24px rgba(34, 197, 94, 0.25);
    }

    .btn-primary.loading {
      opacity: 0.7;
      cursor: not-allowed;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .spin {
      animation: spin 0.8s linear infinite;
      display: inline-block;
    }
  </style>
</head>

<body>

  <!-- Ambient lighting -->
  <div class="ambient ambient-tl"></div>
  <div class="ambient ambient-bl"></div>

  <!-- ── Sidebar ── -->
  <aside class="sidebar">
    <div class="sidebar-brand">
      <h1>Admin Panel</h1>
      <p>Power &amp; Performance</p>
    </div>

    <nav class="sidebar-nav">
      <a class="nav-item" href="#">
        <span class="material-symbols-outlined">dashboard</span>
        Dashboard
      </a>
      <a class="nav-item" href="#">
        <span class="material-symbols-outlined">category</span>
        Categorias
      </a>
      <a class="nav-item" href="#">
        <span class="material-symbols-outlined">inventory_2</span>
        Produtos
      </a>
      <a class="nav-item active" href="#">
        <span class="material-symbols-outlined">group</span>
        Usuários
      </a>
    </nav>

    <div class="sidebar-footer">
      <a class="nav-item" href="#">
        <span class="material-symbols-outlined">logout</span>
        Logout
      </a>
    </div>
  </aside>

  <!-- ── Shell ── -->
  <div class="shell">

    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-brand">Power &amp; Performance</div>
      <div class="topbar-actions">
        <button class="icon-btn" aria-label="Notificações">
          <span class="material-symbols-outlined">notifications</span>
        </button>
        <button class="icon-btn" aria-label="Configurações">
          <span class="material-symbols-outlined">settings</span>
        </button>
      </div>
    </header>

    <!-- Page -->
    <main class="page">

      <a class="back-link" href="#">
        <span class="material-symbols-outlined">arrow_back</span>
        Voltar para listagem
      </a>

      <div class="page-header">
        <div>
          <h2 class="page-title">Editar <span>Usuário</span></h2>
          <p class="page-subtitle">Atualize as informações do usuário selecionado.</p>
        </div>
        <div class="security-badge">
          <span class="material-symbols-outlined">verified_user</span>
          <div>
            <strong>Segurança de Dados</strong>
            <small>Criptografia AES-256 ativa</small>
          </div>
        </div>
      </div>

      <!-- Form Card -->
      <div class="form-card">
        <form id="create-form" method="post" action="/pages/users/actions/update.php?id=<?= $user->id ?>">
          <div class="form-grid">

            <!-- Nome -->
            <div class="field col-full">
              <label for="name">Nome Completo</label>
              <input id="name" type="text" value="<?= htmlspecialchars($user->name) ?>" name="name" autocomplete="name" />
            </div>

            <!-- Email -->
            <div class="field">
              <label for="email">E-mail Corporativo</label>
              <input id="email" type="email" value="<?= htmlspecialchars($user->email) ?>" name="email" autocomplete="email" />
            </div>

            <!-- Nível de Acesso -->
            <div class="field">
              <label for="level">Nível de Acesso</label>
              <div class="select-wrap">
                <select id="level" name="level">
                  <option value="Usuário Comum" <?= $user->level === 'Usuário Comum' ? 'selected' : '' ?>>Usuário Comum</option>
                  <option value="Administrador" <?= $user->level === 'Administrador' ? 'selected' : '' ?>>Administrador</option>
                </select>
                <span class="select-arrow material-symbols-outlined">expand_more</span>
              </div>
            </div>

            <div class="form-divider"></div>

            <!-- Actions -->
            <div class="form-actions">
              <button class="btn-primary" type="submit" id="submit-btn">
                <span class="material-symbols-outlined">person_add</span>
                Atualizar Usuário
              </button>
              <a class="btn-ghost" href="/pages/users/users.php">
                Voltar
              </a>
            </div>

          </div>
        </form>
      </div>

      <!-- Footer Notes -->
      <div class="footer-notes">
        <div class="note-item">
          <span class="material-symbols-outlined">mail</span>
          <p>Um convite será enviado automaticamente para o e-mail cadastrado.</p>
        </div>
        <div class="note-item">
          <span class="material-symbols-outlined">security</span>
          <p>O usuário deverá alterar a senha no primeiro acesso ao sistema.</p>
        </div>
        <div class="note-item">
          <span class="material-symbols-outlined">history</span>
          <p>Todas as ações deste novo perfil serão registradas no log de auditoria.</p>
        </div>
      </div>

    </main>
  </div>

  <script>
    const form = document.getElementById('create-form');
    const btn = document.getElementById('submit-btn');

    form.addEventListener('submit', () => {
      btn.innerHTML = '<span class="material-symbols-outlined spin">sync</span> Processando...';
      btn.classList.add('loading');
      btn.disabled = true;
    });
  </script>
</body>

</html>