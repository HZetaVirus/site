<?php

namespace app\controllers;

use app\class\Action;

class IndexController extends Action
{
    public function index(){
        $this->render('index');
    }

    public function cadastro(){
        $this->render('cadastro');
    }

    public function simulador(){}
}