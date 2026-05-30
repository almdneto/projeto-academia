<?php 

require_once __DIR__ . '/../../../includes/auth/auth_check.php';
require_once __DIR__ . '/../../../includes/admin/user_check.php';
require_once __DIR__ . '/../functions/functions.php';

$userFunctions = new UserFunctions();


$name = trim($_POST['name']) ?? '';
$email = trim($_POST['email']) ?? '';
$pass = trim($_POST['pass']) ?? '';
$level = trim($_POST['level']) ?? '';

$emailExists = $userFunctions->emailExists($conn, $email);

if ($name === '' || $email === '' || $pass === '' || $level === '') {
  $_SESSION['erro_message'] = 'Preencha todos os campos.';
  header('Location: /pages/users/create.php');
  exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION['erro_message'] = 'E-mail inválido.';
  header('Location: /pages/users/create.php');
  exit();
}

if (strlen($pass) < 6) {
  $_SESSION['erro_message'] = 'A senha precisa ter pelo menos 6 caracteres.';
  header('Location: /pages/users/create.php');
  exit();
}

if ($emailExists) {
  $_SESSION['erro_message'] = 'Este e-mail já está cadastrado.';
  header('Location: /pages/users/create.php');
  exit();
}

$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

$createdUser = $userFunctions->createUser($conn, $name, $email, $hashedPass, $level);
if ($createdUser) {
  $_SESSION['success_message'] = 'Usuário criado com sucesso.';
  header('Location: /pages/users/index.php');
  exit();
} else {
  $_SESSION['erro_message'] = 'Erro ao criar usuário. Tente novamente.';
  header('Location: /pages/users/actions/create.php');
  exit();
}