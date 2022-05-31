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
            $stmt = Database::connect()->prepare('SELECT *, influencer.firstname as influencer_firstname, influencer.lastname as influencer_lastname FROM  partnerships inner join users on users.id = partnerships.influencer_id 
            inner join influencers on influencers.user_id = users.id WHERE brand_id = :brand_id');
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
            $stmt = Database::connect()->prepare('SELECT *, brands.name as brand_name FROM  partnerships inner join users on users.id = partnerships.brand_id 
            inner join brands on brands.user_id = users.id WHERE influencer_id = :influencer_id');
            $stmt->execute(array(":influencer_id" => $influencerID));
            $results = $stmt->fetchAll();
            return $results;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération des partenariats de l\'influenceur : ' . $exception->getMessage();
        }
    }

    static public function countByBrand($brandID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT count(*) as count_partnerships from partnerships WHERE brand_id = :brand_id');
            $stmt->execute(array(":brand_id" => $brandID));
            $results = $stmt->fetch(PDO::FETCH_OBJ);
            return $results->count_partnerships;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération du nombre total des partenariats de la marque : ' . $exception->getMessage();
        }
    }

    static public function countByInfluencer($influencerID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT count(*) as count_partnerships from partnerships WHERE influencer_id = :influencer_id');
            $stmt->execute(array(":influencer_id" => $influencerID));
            $results = $stmt->fetch(PDO::FETCH_OBJ);
            return $results->count_partnerships;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération du nombre total des partenariats de l\'influenceur : ' . $exception->getMessage();
        }
    }

    static public function sumByBrand($brandID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT SUM(amount_paid) as sum_amounts_paid from partnerships WHERE brand_id = :brand_id');
            $stmt->execute(array(":brand_id" => $brandID));
            $results = $stmt->fetch(PDO::FETCH_OBJ);
            return $results->sum_amounts_paid;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération du nombre total des montants versés par la marque : ' . $exception->getMessage();
        }
    }

    static public function sumByInfluencer($influencerID)
    {
        try {
            $stmt = Database::connect()->prepare('SELECT SUM(amount_paid) as sum_amounts_paid from partnerships WHERE influencer_id = :influencer_id');
            $stmt->execute(array(":influencer_id" => $influencerID));
            $results = $stmt->fetch(PDO::FETCH_OBJ);
            return $results->sum_amounts_paid;
        } catch (PDOException $exception) {
            echo 'Erreur lors de la récupération du nombre total des montants versés de l\'influenceur : ' . $exception->getMessage();
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
