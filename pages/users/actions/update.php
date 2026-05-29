<?php

require_once __DIR__ . '/../functions/functions.php';

$userId = $_GET['id'] ?? null;
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$level = $_POST['level'] ?? '';

if (!$userId) {
  header('Location: /pages/error/users/errorId.php');
  exit;
}

$userFunctions = new UserFunctions();
$updatedUser = $userFunctions->updateUser($conn, $userId, $name, $email, $level);

header('Location: /pages/users/users.php');
exit;