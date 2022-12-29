<?php

namespace app\controllers;

use app\class\Action;
use app\models\Usuarios;

class IndexController extends Action
{
    public function index(){
        $this->render('index');
    }

    public function cadastro(){

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
           (new Usuarios())->cadastrar($dados);
           
           $this->render('index');
        }     
       
       /*
       ====================================================================
       O código abaixo é a forma antiga de se fazer, depois do PHP 8.0.1
         não funciona mais o de cima éo correto lembra um pouco java
       ==================================================================== 
            $con = Connection::getInstancia();
            $user->__set('nome',   strip_tags($_POST['nome']));
            $user->__set('cel',    strip_tags($_POST['cel']));
            $user->__set('cidade', strip_tags($_POST['cidade']));
            $user->__set('estado', strip_tags($_POST['estado']));
            $user->salvar();
       ====================================================================     
        */

        $this->render('cadastro');
    }

    public function simulador(){
        $this->render('simulador');
    }

    public function login(){
        $this->render('login');
    }
}