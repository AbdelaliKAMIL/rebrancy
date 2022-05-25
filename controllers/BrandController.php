<?php

class BrandController
{
    public function router($page)
    {
        include('views/brand/' . $page . '.php');
    }

    public function getAllBrands()
    {
        $brands = Brand::getAll();

        return $brands;
    }

    public function getFewBrands()
    {
        $brands = Brand::getFew();

        return $brands;
    }

    public function getBrand($id)
    {
        $brand = Brand::getById($id);

        return $brand;
    }

    public function addBrand()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                User::create($email, $password);

                $data = array(
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'industry' => $_POST['industry'],
                    'turnover' => $_POST['turnover'],
                    'user_id' => 25
                );

                $isCreatedSuccessfully = Brand::create($data);

                if ($isCreatedSuccessfully) {
                    header('location:http://localhost/rebrancy/');
                } else {
                    echo 'Erreur lors de la création de la marque.';
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
