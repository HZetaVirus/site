<?php

namespace app\models;

use app\database\Connection;

class Usuarios 
{
    private string $id;
    private string $nome;
    private string $cel;
    private string $cidade;
    private string $estado;
    
    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute, $value){
        $this->$attribute = $value;
    }

    public function cadastrar(array $dados):void{
        
        $query = "insert into usuario (nome, cel) values (:nome, :cel)";
        $stmt = Connection::getInstancia()->prepare($query);
        $stmt->execute([
           ':nome' => $dados['nome'],
           ':cel'  => $dados['cel']
           ]
        );
        
    }

    public function read(){        
        $query = "select nome, cel from usuario";
        $stmt  =  Connection::getInstancia()->prepare($query); 
        $stmt->execute();       
        $busca = $stmt->fetch();
        return $busca;
    }

}