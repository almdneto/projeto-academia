<?php

require_once __DIR__ . '/../../../includes/auth/auth_check.php';
require_once __DIR__ . '/../../../includes/admin/user_check.php';
require_once __DIR__ . '/../functions/functions.php';

$userId = $_GET['id'] ?? header('Location: /pages/error/users/errorId.php');;
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$level = $_POST['level'] ?? '';



if (!$userId) {
  header('Location: /pages/error/users/errorId.php');
  exit;
}

$userFunctions = new UserFunctions();
$updatedUser = $userFunctions->updateUser($conn, $userId, $name, $email, $level);

header('Location: /pages/users/index.php');
exit;