<?php

namespace app\class;

use app\core\Run;
use app\core\Uri;

abstract class Bootstrap
{

    private array $routes;

    public function __construct()
    {
        $this->initRouts();
        Run::run($this->getRoutes(), Uri::getUri());
    }

    abstract public function initRouts();

    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }
}