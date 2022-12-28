<?php

namespace app\controllers;

use app\class\Action;

class IndexController extends Action
{
    public function index(){
        $this->render('inicio');
    }

    public function cadastro(){}

    public function simulador(){}
}