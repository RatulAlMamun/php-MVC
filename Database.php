<?php

namespace app;

use PDO;

class Database
{
    public \PDO $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;port=3306;dbname=mvc', 'root', '');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function getProducts($search = "")
    {
        if ($search) {
            $statement = $this->pdo->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY created_at DESC");
            $statement->bindValue(":title", "%$search%");
        } else {
            $statement = $this->pdo->prepare("SELECT * FROM products ORDER BY created_at DESC");
        }
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}