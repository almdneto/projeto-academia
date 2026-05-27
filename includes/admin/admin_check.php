<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/../../config/database.php';

if (!isset($_SESSION["user_id"])) {
  header("Location: ../auth/login.php");
  exit;
}

$userId = $_SESSION["user_id"];

$stmt = $conn->prepare('SELECT id, level FROM usuarios WHERE id = :id LIMIT 1');
$stmt->bindValue(':id', $userId, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_OBJ);

if (!$user){
  session_destroy();
  header("Location: /pages/auth/login.php");
  exit();
}

if ((int)$user->level !== 1) {
  $_SESSION['erro_permission'] = 'Acesso negado. Você não tem permissão para acessar esta página.';

  header("Location: /pages/home.php");
  exit();
}