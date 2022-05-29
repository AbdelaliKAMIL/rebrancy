<?php

class User
{
    static public function authenticate($email)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->execute(array(':email' => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (Exception $exception) {
            echo "Erreur lors de la connexion de l'utilisateur : ",  $exception->getMessage();
        }
    }

    static public function create($email, $password, $role)
    {
        try {
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = Database::connect()->prepare("INSERT INTO users (email, password, role)
            VALUES(:email, :password, :role)");

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password_hashed);
            $stmt->bindParam(':role', $role);

            $stmt->execute();

            $stmt = Database::connect()->prepare('SELECT * FROM  users WHERE email = :email');
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la création de l\'utilisateur : ' . $exception->getMessage();
        }
    }
}
