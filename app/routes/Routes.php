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
        
        $routes['login'] = [
            'route'      => '/login',
            'controller' => 'indexController',
            'action'     => 'login'
        ];

        $routes['logoff'] = [
            'route'      => '/logoff',
            'controller' => 'indexController',
            'action'     => 'logoff'
        ];

        $routes['calcular'] = [
            'route'      => '/calcular',
            'controller' => 'indexController',
            'action'     => 'calcular'
        ];

        $this->setRoutes($routes);

    }
}