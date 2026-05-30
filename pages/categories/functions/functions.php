<?php

require_once __DIR__ . '/../../../config/database.php';


class CategoryFunctions
{
  //Criação de categoria
  public function createCategory($conn, $name)
  {
    $name = trim($name);

    $stmt = $conn->prepare('INSERT INTO categories (name) VALUES (:name)');
    $stmt->bindValue(':name', $name);
    return $stmt->execute();
  }

  public function categoryExists($conn, $name)
  {
    $stmt = $conn->prepare("SELECT id FROM categories WHERE name = :name");
    $stmt->bindValue(':name', $name);
    $stmt->execute();
    return $stmt->rowCount() > 0;
  }
  
  //Exibição de categorias na tabela
  public function getCategories($conn)
  {
    $stmt = $conn->prepare('SELECT id, name FROM categories');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  //Edição
  public function getCategoryById($conn, $categoryId)
  {
    $stmt = $conn->prepare('SELECT id, name FROM categories WHERE id = :id LIMIT 1');
    $stmt->bindValue(':id', $categoryId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }

  public function updateCategory($conn, $categoryId, $name)
  {
    $name = trim($name);

    $stmt = $conn->prepare('UPDATE categories SET name = :name WHERE id = :id');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':id', $categoryId, PDO::PARAM_INT);
    return $stmt->execute();
  }

  public function deleteCategory($conn, $categoryId)
  {
    $stmt = $conn->prepare('DELETE FROM categories WHERE id = :id');
    $stmt->bindValue(':id', $categoryId, PDO::PARAM_INT);
    return $stmt->execute();
  }
}