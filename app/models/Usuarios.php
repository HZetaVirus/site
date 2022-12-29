<?php

namespace app\models;

class Usuarios extends Model
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

    public function create(){
        $sql  = "insert into usuario(nome, cel, cidade, estado)
                                             values
                               (:nome, :cel, :cidade, :estado)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome',   $this->__get('nome'));
        $stmt->bindValue(':cel',    $this->__get('cel'));
        $stmt->bindValue(':cidade', $this->__get('cidade'));
        $stmt->bindValue(':estado', $this->__get('estado'));
        $stmt->execute();
        
        return $this;
    }

    public function read(){}

}