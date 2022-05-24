<?php

class Influencer
{
    static public function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM influencers');
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    static public function getFew()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM influencers LIMIT 6');
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    static public function getById($id)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM  influencers WHERE id=:id');
            $stmt->execute(array(":id" => $id));
            $influencer = $stmt->fetch(PDO::FETCH_OBJ);
            return $influencer;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération de l\'influenceur : ' . $exception->getMessage();
        }
    }

    static public function create($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO influencers (firstname, lastname, nickname, age, function, photo, facebook, instagram, youtube, snapshot)");

        $stmt->bindParam(':firstname', $data['firstname']);
        $stmt->bindParam(':lastname', $data['lastname']);
        $stmt->bindParam(':nickname', $data['nickname']);
        $stmt->bindParam(':age', $data['age']);
        $stmt->bindParam(':function', $data['function']);
        $stmt->bindParam(':photo', $data['photo']);
        $stmt->bindParam(':facebook', $data['facebook']);
        $stmt->bindParam(':instagram', $data['instagram']);
        $stmt->bindParam(':youtube', $data['youtube']);
        $stmt->bindParam(':snapshot', $data['snapshot']);

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la création de l\'influenceur : ' . $exception->getMessage();
            }
        }
    }

    static public function update($data)
    {
        $stmt = Database::connect()->prepare('UPDATE influencer SET firstname:firstname, lastname:lastname, nickname:nickname, age:age, function:function, photo:photo, facebook:facebook, instagram:instagram, youtube:youtube, snapshot:snapshot WHERE id=:id');

        $stmt->bindParam(':firstname', $data['firstname']);
        $stmt->bindParam(':lastname', $data['lastname']);
        $stmt->bindParam(':nickname', $data['nickname']);
        $stmt->bindParam(':age', $data['age']);
        $stmt->bindParam(':function', $data['function']);
        $stmt->bindParam(':photo', $data['photo']);
        $stmt->bindParam(':facebook', $data['facebook']);
        $stmt->bindParam(':instagram', $data['instagram']);
        $stmt->bindParam(':youtube', $data['youtube']);
        $stmt->bindParam(':snapshot', $data['snapshot']);

        $isUpdatedSuccessfully = $stmt->execute();

        if ($isUpdatedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la modification de l\'influenceur : ' . $exception->getMessage();
            }
        }
    }

    static public function delete($id)
    {
        $stmt = Database::connect()->prepare('DELETE FROM  influencer WHERE id=:id');

        $isDeletedSuccessfully = $stmt->execute(array(":id" => $id));

        if ($isDeletedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la suppression de l\'influenceur : ' . $exception->getMessage();
            }
        }
    }
}
