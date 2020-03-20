<?php

require_once 'db.php';

function newsletter(string $email): bool
{
    $pdo = getPdo();
    $query = "INSERT INTO newsletter (email) VALUES (:email)";
    $stmt = $pdo->prepare($query);
     return $stmt->execute([
    'email' => $email
     ]);

}



