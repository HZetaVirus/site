<?php

namespace app\database;

use PDO;

class Connection
{
    static public function conenct(){
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=siten;charset=utf8", "root", "dalwid"
            );
    
            return $pdo;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        
    }
}