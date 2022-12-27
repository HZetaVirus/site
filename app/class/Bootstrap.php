<?php

namespace app\class;

abstract class Bootstrap
{

    private array $routes;

    public function __construct()
    {
        
    }

    abstract public function initRouts();

    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }
}