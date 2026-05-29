<?php

require_once __DIR__ . '/../functions/functions.php';

$userId = $_POST['id'] ?? header('Location: /pages/error/users/errorId.php');

$userFunctions = new UserFunctions();
$deletedUser = $userFunctions->deleteUser($conn, $userId);

if ($deletedUser) {
  $_SESSION['success_message'] = 'Usuário apagado com sucesso.';
}

header('Location: /pages/users/users.php');
exit;