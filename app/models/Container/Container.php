<?php

namespace app\models\Container;

use app\database\Connection;

class Container
{
    public static function getModel($model) {
		$class = "\\app\\models\\".ucfirst($model);
		$conn = Connection::conenct();

		return new $class($conn);
	}
}