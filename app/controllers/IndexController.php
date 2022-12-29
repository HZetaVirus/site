<?php

namespace app\controllers;

use app\class\Action;
use app\models\Container\Container;

class IndexController extends Action
{
    public function index(){
        $this->render('index');
    }

    public function cadastro(){
        $user = Container::getModel('Usuarios');
        $user->__set('nome', $_POST['nome']);
        echo $user->__get('nome');
        echo '<br>';
        //print_r($_POST);


        $this->render('cadastro');
    }

    public function simulador(){
        $this->render('simulador');
    }

    public function login(){
        $this->render('login');
    }
}