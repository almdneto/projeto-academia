<?php
session_start();

require_once __DIR__ . '/../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header('Location: /pages/auth/login.php');
  exit();
}

$email = trim($_POST['email'] ?? '');
$pass = trim($_POST['pass'] ?? '');

if ($email === '' || $pass === '') {
  $_SESSION['erro_login'] = 'Preencha todos os campos.';
  header('Location: /pages/auth/login.php');
  exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['erro_login'] = 'E-mail inválido.';
    header('Location: /pages/auth/login.php');
    exit;
}

$stmt = $conn->prepare('SELECT id, name, email, pass, level FROM usuarios WHERE email = :email LIMIT 1');
$stmt->bindValue(':email', $email);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_OBJ);

if (!$user || !password_verify($pass, $user->pass)) {
  $_SESSION['erro_login'] = 'E-mail ou senha incorretos.';
  header('Location: /pages/auth/login.php');
  exit();
}

session_regenerate_id(true);

$_SESSION['user_id'] = $user->id;
$_SESSION['user_name'] = $user->name;
$_SESSION['user_level'] = (int)$user->level;

$userLevel = (int)$user->level;

if ($userLevel === 1) {
  header('Location: /pages/users/index.php');
  exit();
} else {
  header('Location: /pages/home.php');
  exit();
}