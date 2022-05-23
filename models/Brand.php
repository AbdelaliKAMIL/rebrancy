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

    static public function getById($id)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM  brands WHERE id=:id');
            $stmt->execute(array(":id" => $id));
            $brand = $stmt->fetch(PDO::FETCH_OBJ);
            return $brand;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération de la marque : ' . $exception->getMessage();
        }
    }

    static public function create($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO brands (name, description, industry, logo, image, turnover)
        VALUES(:name, :description, :industry, :logo, :image, :turnover)");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':industry', $data['industry']);
        $stmt->bindParam(':logo', $data['logo']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':turnover', $data['turnover']);

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la création de la marque : ' . $exception->getMessage();
            }
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
