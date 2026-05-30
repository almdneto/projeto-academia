<?php

require_once __DIR__ . '/../../../includes/auth/auth_check.php';
require_once __DIR__ . '/../../../includes/admin/user_check.php';
require_once __DIR__ . '/../functions/functions.php';

$userId = $_POST['id'] ?? header('Location: /pages/error/users/errorId.php');;

if (!$userId || !is_numeric($userId)) {
  header('Location: /pages/error/users/errorId.php');
  exit;
}

$userFunctions = new UserFunctions();
$deletedUser = $userFunctions->deleteUser($conn, $userId);

if ($deletedUser) {
  $_SESSION['success_message'] = 'Usuário apagado com sucesso.';
} else {
  $_SESSION['erro_message'] = 'Erro ao apagar usuário. Tente novamente mais tarde.';
}

header('Location: /pages/users/index.php');
exit;