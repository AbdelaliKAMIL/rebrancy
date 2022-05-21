<?php
class InfluencerManager
{
    public function getInfluencers()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, name, description, logo, turnover, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $query;
    }

    public function getTopInfluencers()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 6');

        return $query;
    }

    public function getInfluencerById($influencerId)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $query->execute(array($influencerId));
        $influencer = $query->fetch();

        return $influencer;
    }

    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=rebrancy;charset=utf8', 'root', '');
        return $db;
    }
}
