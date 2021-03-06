<?php

class PartnershipController
{
    public function getAllPartnerships()
    {
        $partnerships = Partnership::getAll();

        return $partnerships;
    }

    public function getPartnershipsByBrand($brandID)
    {
        $partnerships = Partnership::getByBrand($brandID);

        return $partnerships;
    }

    public function getPartnershipsByInfluencer($influencerID)
    {
        $partnerships = Partnership::getByInfluencer($influencerID);

        return $partnerships;
    }

    public function countPartnershipsByInfluencer($influencerID)
    {
        $countPartnerships = Partnership::countByBrand($influencerID);

        return $countPartnerships;
    }

    public function countPartnershipsByBrand($brandID)
    {
        $countPartnerships = Partnership::countByBrand($brandID);

        return $countPartnerships;
    }

    public function sumAmountsPaidByInfluencer($influencerID)
    {
        $sumAmountsPaid = Partnership::sumByInfluencer($influencerID);

        return $sumAmountsPaid;
    }

    public function sumAmountsPaidByBrand($brandID)
    {
        $sumAmountsPaid = Partnership::sumByBrand($brandID);

        return $sumAmountsPaid;
    }
    
    public function addBrand()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = 'BRAND';

                $user = User::create($email, $password, $role);

                $data = array(
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'industry' => $_POST['industry'],
                    'turnover' => $_POST['turnover'],
                    'user_id' => $user->id
                );

                $isCreatedSuccessfully = Brand::create($data);

                if ($isCreatedSuccessfully) {
                    header('location:http://localhost/rebrancy/');
                } else {
                    echo 'Erreur lors de la cr??ation de la marque.';
                }
            } else {
                echo '<script>alert("Veuillez confirmer votre password correctement!")</script>';
            }
        }
    }

    public function editBrand()
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

            $isUpdatedSuccessfully = Brand::update($data);

            if ($isUpdatedSuccessfully) {
                header('location:http://localhost/Rebrancy2/');
            } else {
                echo 'Erreur lors de la modification de la marque.';
            }
        }
    }
}
