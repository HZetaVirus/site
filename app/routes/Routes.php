<?php

namespace app\routes;

use app\class\Bootstrap;

class Routes extends Bootstrap
{
    public function initRouts(){

        $routes['home'] = [
            'route'      => '/',
            'controller' => 'indexController',
            'action'     => 'index'
        ];

        $routes['cadastro'] = [
            'route'      => '/cadastro',
            'controller' => 'indexController',
            'action'     => 'cadastro'
        ];

        $routes['simulador'] = [
            'route'      => '/simulador',
            'controller' => 'indexController',
            'action'     => 'simulador'
        ];
        
        $routes['autenticar'] = [
            'route'      => '/autenticar',
            'controller' => 'autenticarController',
            'action'     => 'autenticar'
        ];

        $this->setRoutes($routes);

    }
}