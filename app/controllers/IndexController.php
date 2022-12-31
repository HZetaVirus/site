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
       
        if($dados == ""){           
            $this->render('cadastro');
        }
        if(isset($dados)){
           (new Usuarios())->cadastrar($dados);
           
           $this->render('index');
        }     
       
        $this->render('cadastro');
    }

    public function simulador(){
        
        session_start();
        
        $login = $_POST['acessar'];     
        
        $result = (new Usuarios())->read();        
        
        $_SESSION['login'] = $result->cel;
        $_SESSION['nome']  = $result->nome;
        if($login == $_SESSION['login']){
            echo "<script language='javascript'>window.alert('Login realizado com sucesso')</script>";
            $this->render('simulador');
        }
        else{
            echo "<script language='javascript'>window.alert('Erro de login')</script>";
            $this->render('login');
        }

        $this->render('simulador');
        
    }

    public function login(){       
        
        $this->render('login');
    }
}