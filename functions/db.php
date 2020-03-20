<?php

function getPdo(): PDO
{
  try {
    
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel",
      "partiel",
      "partiel123"
    );
    return $pdo;
  } catch(PDOException $ex) {
    
    exit("Erreur lors de la connexion à la base de données");
  }
}