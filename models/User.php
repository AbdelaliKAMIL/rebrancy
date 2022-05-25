<?php

class User
{
    static public function authenticate($email, $password)
    {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = Database::connect()->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
            $stmt->execute(array(':email' => $email, ':password' => $password_hashed));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (Exception $exception) {
            echo "Erreur lors de la connexion de l'utilisateur : ",  $exception->getMessage();
        }
    }

    static public function create($email, $password)
    {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $stmt = Database::connect()->prepare("INSERT INTO users (email, password)
        VALUES(:email, :password)");

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_hashed);
        // $stmt->bindParam(':role', 'BRAND');
        echo "Tout ce passe bien.";

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            try {
                echo "New record created successfully. Last inserted ID is: ";
            } catch (PDOException $exception) {
                echo 'Erreur lors de la création de la marque : ' . $exception->getMessage();
            }
        }
    }
}
