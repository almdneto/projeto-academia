<?php

session_start();

require_once __DIR__ . '/../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header('Location: ./register.php');
  exit();
} 

$name = $_POST['name'] ?? '';
$email = trim($_POST['email'] ?? '');
$pass = trim($_POST['pass'] ?? '');
$confirmPass = $_POST["confirm_pass"] ?? "";
$terms = $_POST['terms'] ?? '';

if ($name === '' || $email === '' || $pass === '' || $confirmPass === '') {
  $_SESSION['erro_register'] = 'Preencha todos os campos.';
  header('Location: ./register.php');
  exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $_SESSION['erro_register'] = 'E-mail inválido.';
  header('Location: ./register.php');
  exit();
}

if (strlen($pass) < 6){
  $_SESSION['erro_register'] = 'A senha precisa ter pelo menos 6 caracteres.';
  header('Location: ./register.php');
  exit();
}

if ($pass !== $confirmPass){
  $_SESSION['erro_register'] = 'As senhas estão diferentes.';
  header('Location: ./register.php');
  exit();
}

if ($terms !== "1"){
  $_SESSION['erro_register'] = 'Você precisa aceitar os termos de uso.';
  header('Location: ./register.php');
  exit();
}

$stmt = $conn->prepare('SELECT id FROM usuarios WHERE email = :email LIMIT 1');
$stmt->bindValue(':email', $email);
$stmt->execute();
$existingUser = $stmt->fetch(PDO::FETCH_OBJ);

if ($existingUser){
  $_SESSION['erro_register'] = 'Este e-mail já está cadastrado.';
  header('Location: ./register.php');
  exit();
}
//Criptografa a senha, massa KKKK
$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare('INSERT INTO usuarios (name, email, pass) VALUES (:name, :email, :pass)');
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $hashedPass);
$stmt->execute();

$userId = $conn->lastInsertId();
session_regenerate_id(true);
$_SESSION['user_id'] = $userId;
$_SESSION['user_name'] = $name;

header('Location: /pages/home.php');
exit();
