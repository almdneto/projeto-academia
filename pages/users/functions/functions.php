<?php

require_once __DIR__ . '/../../../config/database.php';


class UserFunctions {
  //Exibição de usuários na tabela
  public function getUsers($conn) {
    $stmt = $conn->prepare('SELECT id, name, email, level FROM usuarios');
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($users as $user) {
      $user->level = (int)$user->level === 1 ? 'Administrador' : 'Usuário Comum';
    }

    return $users;
  }
  //Edição
  public function getUserById($conn, $userId) {
    $stmt = $conn->prepare('SELECT id, name, email, level FROM usuarios WHERE id = :id LIMIT 1');
    $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if ($user) {
      $user->level = (int)$user->level === 1 ? 'Administrador' : 'Usuário Comum';
    }

    return $user;
  }

  public function updateUser($conn, $userId, $name, $email, $level) {
    $name = trim($name);
    $email = trim($email);
    $level = $level === 'Administrador' ? 1 : 0;

    $stmt = $conn->prepare('UPDATE usuarios SET name = :name, email = :email, level = :level WHERE id = :id');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':level', $level, PDO::PARAM_INT);
    $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
    return $stmt->execute();
  }


  public function deleteUser($conn, $userId) {
    $stmt = $conn->prepare('DELETE FROM usuarios WHERE id = :id');
    $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
    return $stmt->execute();
  }
}