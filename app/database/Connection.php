<?php

namespace app\database;

use PDO;

class Connection
{
    static public function conenct(){
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname={};charset=utf8", "root", ""
            );
    
            return $pdo;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        
    }
}