<?php

class Brand
{
    static public function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM brands');
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    static public function getFew()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM brands LIMIT 6');
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    static public function getById($userID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM  brands WHERE user_id = :user_id');
            $stmt->execute(array(":user_id" => $userID));
            $brand = $stmt->fetch(PDO::FETCH_OBJ);
            return $brand;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération de la marque : ' . $exception->getMessage();
        }
    }

    static public function create($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO brands (name, description, industry, turnover, user_id)
        VALUES(:name, :description, :industry, :turnover, :user_id)");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':industry', $data['industry']);
        $stmt->bindParam(':turnover', $data['turnover']);
        $stmt->bindParam(':user_id', $data['user_id']);

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            return true;
        } else {
            echo 'Erreur lors de la création de la marque au niveau de la base de données.';
        }
    }

    static public function update($data)
    {
        $stmt = Database::connect()->prepare('UPDATE brand SET name=:name, description=:description, industry=:industry, logo=:logo, image=:image, turnover=:turnover WHERE id=:id');

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':industry', $data['industry']);
        $stmt->bindParam(':logo', $data['logo']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':turnover', $data['turnover']);

        $isUpdatedSuccessfully = $stmt->execute();

        if ($isUpdatedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la modification de la marque : ' . $exception->getMessage();
            }
        }
    }

    static public function delete($id)
    {
        $stmt = Database::connect()->prepare('DELETE FROM  brand WHERE id=:id');

        $isDeletedSuccessfully = $stmt->execute(array(":id" => $id));

        if ($isDeletedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la suppression de la marque : ' . $exception->getMessage();
            }
        }
    }
}
