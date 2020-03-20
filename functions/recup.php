<?php
require_once 'db.php';

function recup(): ?array
{
  $pdo = getPdo();
  $query = "SELECT * FROM users";
  $stmt = $pdo->prepare($query);

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$row) {
    return null;
  }

  return $row;
}
