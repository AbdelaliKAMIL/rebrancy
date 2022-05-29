<?php
class UserController
{
    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$password_hashed = password_hash($password, PASSWORD_DEFAULT);
            $userConnected = User::authenticate($email);

            if ($userConnected->password === $password) {
                session_start();
                $_SESSION['userID'] = $userConnected->id;

                if ($userConnected->role === 'BRAND') {
                    header('location:http://localhost/rebrancy/brand-profile');
                } elseif ($userConnected->role === 'INFLUENCER') {
                    header('location:http://localhost/rebrancy/influencer-profile');
                } else {
                    header('location:http://localhost/rebrancy/');
                }
            } else {
                header('location:http://localhost/rebrancy/sign-in');
            }
        }
    }
}
