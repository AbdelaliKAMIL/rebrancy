<?php

class Database
{
    static public function connect()
    {
        try {
            // On se connecte à MySQL
            $dsn = 'mysql:host=localhost;dbname=rebrancy;charset=utf8';
            $db = new PDO($dsn, 'root', '');
            return $db;
            echo 'Connexion à la base de données est crée avec succès.';
        } catch (PDOException $exception) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur lors de la connexion à la base de données : ' . $exception->getMessage());
        }
    }
}
