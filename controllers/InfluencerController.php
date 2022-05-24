<?php

class InfluencerController
{
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

    public function getInfluencer($id)
    {
        $influencer = Influencer::getById($id);

        return $influencer;
    }

    public function addInfluencer()
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

            $isCreatedSuccessfully = Influencer::create($data);

            if ($isCreatedSuccessfully) {
                header('location:http://localhost/Rebrancy2/');
            } else {
                echo 'Erreur lors de la création de la marque.';
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
