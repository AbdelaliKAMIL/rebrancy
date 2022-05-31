<?php

class Partnership
{
    static public function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM partnerships');
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    static public function getByBrand($brandID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM  partnerships WHERE brand_id = :brand_id');
            $stmt->execute(array(":brand_id" => $brandID));
            $results = $stmt->fetchAll();
            return $results;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération des partenariats de la marque : ' . $exception->getMessage();
        }
    }

    static public function getByInfluencer($influencerID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT * FROM  partnerships WHERE influencer_id = :influencer_id');
            $stmt->execute(array(":influencer_id" => $influencerID));
            $results = $stmt->fetchAll();
            return $results;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération des partenariats de l\'influenceur : ' . $exception->getMessage();
        }
    }

    static public function create($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO influencers (firstname, lastname, nickname, age, function, facebook, instagram, youtube, snapchat, user_id)
        VALUES (:firstname, :lastname, :nickname, :age, ':function', :facebook, :instagram, :youtube, :snapchat, :user_id)");

        $stmt->bindParam(':firstname', $data['firstname']);
        $stmt->bindParam(':lastname', $data['lastname']);
        $stmt->bindParam(':nickname', $data['nickname']);
        $stmt->bindParam(':age', $data['age']);
        $stmt->bindParam(':function', $data['function']);
        $stmt->bindParam(':facebook', $data['facebook']);
        $stmt->bindParam(':instagram', $data['instagram']);
        $stmt->bindParam(':youtube', $data['youtube']);
        $stmt->bindParam(':snapchat', $data['snapchat']);
        $stmt->bindParam(':user_id', $data['user_id']);

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            return true;
        } else {
            echo 'Erreur lors de la création de l\'influenceur au niveau de la base de données.';
        }
    }

    static public function update($data)
    {
        $stmt = Database::connect()->prepare('UPDATE influencers SET firstname:firstname, lastname:lastname, nickname:nickname, age:age, function:function, photo:photo, facebook:facebook, instagram:instagram, youtube:youtube, snapshot:snapshot WHERE id=:id');

        $stmt->bindParam(':firstname', $data['firstname']);
        $stmt->bindParam(':lastname', $data['lastname']);
        $stmt->bindParam(':nickname', $data['nickname']);
        $stmt->bindParam(':age', $data['age']);
        $stmt->bindParam(':function', $data['function']);
        $stmt->bindParam(':facebook', $data['facebook']);
        $stmt->bindParam(':instagram', $data['instagram']);
        $stmt->bindParam(':youtube', $data['youtube']);
        $stmt->bindParam(':snapchat', $data['snapchat']);

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
        $stmt = Database::connect()->prepare('DELETE FROM  partnerships WHERE id=:id');

        $isDeletedSuccessfully = $stmt->execute(array(":id" => $id));

        if ($isDeletedSuccessfully) {
            try {
                return true;
            } catch (PDOException $exception) {
                echo 'Erreur lors de la suppression du partenariat : ' . $exception->getMessage();
            }
        }
    }
}
