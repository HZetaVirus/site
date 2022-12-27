<?php

namespace app\models\Container;

use app\database\Connection;

class Container
{
    static public function getModel($model){
        $class = "app\\models\\".ucfirst($model);
        $connect = Connection::conenct();

        return new $class($connect);
    }
}