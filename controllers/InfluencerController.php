<?php

class InfluencerController
{
    public function router($page)
    {
        include('views/influencer/' . $page . '.php');
    }

    public function getAllInfluencers()
    {
        $influencers = Influencer::getAll();

        return $influencers;
    }

    public function getFewInfluencers()
    {
        $influencers = Influencer::getFew();

        return $influencers;
    }

    public function getInfluencer($userID)
    {
        $influencer = Influencer::getById($userID);

        return $influencer;
    }

    public function addInfluencer()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = 'INFLUENCER';

                $user = User::create($email, $password, $role);

                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'nickname' => $_POST['nickname'],
                    'age' => $_POST['age'],
                    'function' => $_POST['function'],
                    'facebook' => $_POST['facebook'],
                    'instagram' => $_POST['instagram'],
                    'snapchat' => $_POST['snapchat'],
                    'youtube' => $_POST['youtube'],
                    'user_id' => $user->id
                );

                $isCreatedSuccessfully = Influencer::create($data);

                if ($isCreatedSuccessfully) {
                    header('location:http://localhost/rebrancy/');
                } else {
                    echo 'Erreur lors de la création de l\'influenceur.';
                }
            } else {
                echo '<script>alert("Veuillez confirmer votre password correctement!")</script>';
            }
        }
    }

    public function editInfluencer()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'industry' => $_POST['industry'],
                'logo' => $_POST['logo'],
                'image' => $_POST['image'],
                'turnover' => $_POST['turnover']
            );

            $isUpdatedSuccessfully = Influencer::update($data);

            if ($isUpdatedSuccessfully) {
                header('location:http://localhost/Rebrancy2/');
            } else {
                echo 'Erreur lors de la modification de la marque.';
            }
        }
    }
}
