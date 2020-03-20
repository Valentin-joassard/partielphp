<?php

require_once 'db.php';

function inscription(string $login,string $password,string $email): bool
{
    $pdo = getPdo();
    $query = 'INSERT INTO users (login, password, email) VALUES (:login, :password, :email)';
    $stmt = $pdo->prepare($query);
     return $stmt->execute([
    'login' => $login,
    'password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
    'email' => $email 
     ]);
    
}
