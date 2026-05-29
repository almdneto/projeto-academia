<?php
// ============================================================
// LOGOUT - Encerramento de Sessão
// ============================================================
// Este arquivo destrói a sessão do usuário e redireciona
// para a página de login. É simples, mas cada passo importa!
// ============================================================

// Passo 1: Inicia (ou retoma) a sessão para ter acesso a $_SESSION.
// Precisamos que a sessão esteja ativa para poder destruí-la.
session_start();

// Passo 2: Limpa todos os dados armazenados em $_SESSION.
// Após isso, $_SESSION fica como um array vazio [].
session_unset();

// Passo 3: Destrói a sessão no servidor.
// Remove os dados de sessão do armazenamento do servidor
// e invalida o ID de sessão atual.
session_destroy();

// Passo 4: Redireciona o usuário para a página de login.
// Após destruir a sessão, o usuário não pode mais acessar
// páginas protegidas, pois auth_check.php vai redirecioná-lo aqui.
header('Location: /index.php');

// Passo 5: Para a execução. Sempre use exit() após header('Location:').
exit();