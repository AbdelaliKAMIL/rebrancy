<?php
class UserController
{
    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userConnected = User::authenticate($email, $password);

            session_start();
            $_SESSION["userID"] = $userConnected;

            if ($userConnected != NULL) {
                header('location:http://localhost/rebrancy/');
            } else {
                header('location:http://localhost/rebrancy/sign-in');
            }
        }
    }
}
