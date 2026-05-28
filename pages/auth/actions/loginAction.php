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

$stmt = $conn->prepare('SELECT id, email, pass FROM usuarios WHERE email = :email LIMIT 1');
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

$userId = $_SESSION["user_id"];

$stmt = $conn->prepare('SELECT id, level FROM usuarios WHERE id = :id LIMIT 1');
$stmt->bindValue(':id', $userId, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_OBJ);

$userLevel = (int)$user->level;

if ($userLevel === 1) {
  header('Location: /pages/users/users.php');
  exit();
} else {
  header('Location: /pages/home.php');
  exit();
}