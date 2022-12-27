<?php

namespace app\models;

use PDO;

abstract class Model
{
    protected $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
}