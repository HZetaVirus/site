<?php

namespace app\core;

class Run
{
    public static function run(array $route, $uri){
        foreach ($route as $key => $value) {
            $class  = "app\\controllers\\".ucfirst($value['controller']);

            $action = $value['action'];

            $controller = new $class();

            $controller->$action();

        }
    } 
}