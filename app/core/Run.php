<?php

namespace app\core;

class Run
{
    public static function run(array $route, $uri)
    {
        foreach ($route as $key => $value) {
            if($uri == $value['route']) {
                $class  = "app\\controllers\\".ucfirst($value['controller']);
                
                $controller = new $class();

                $action = $value['action'];

                $controller->$action();
            }
        }
    }
}
