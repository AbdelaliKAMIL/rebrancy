<?php
try {
    // On se connecte à MySQL
    $dsn = 'mysql:host=localhost;dbname=rebrancy;charset=utf8';
    $pdo = new PDO($dsn, 'root', '');
    echo 'Connected successfully with the database';
} catch (PDOException $exception) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Error during the connection with the database MySQL: ' . $exception->getMessage());
}
