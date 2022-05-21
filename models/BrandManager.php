<?php
class BrandManager
{
    public function getBrands()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, name, description, logo, turnover, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $query;
    }

    public function getTopBrands()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 6');

        return $query;
    }

    public function getBrandById($brandId)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $query->execute(array($brandId));
        $brand = $query->fetch();

        return $brand;
    }


    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=rebrancy;charset=utf8', 'root', '');
        return $db;
    }
}
