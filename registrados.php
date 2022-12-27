<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar':
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];

  $sql = new "INSERT TO INTO usuarios (nome,telefone,cidade,estado) VALUES ('{$nome}', '{$telefone}', '{$cidade}', '{$estado}')";

  $res = $conn->query($sql);

  if ($res==true){
    print "<script>alert('Cadastrado com sucesso');</script>";
    print "<script>location.href='?page=login');</script>";
  }else{
    print "<script>alert('Não foi possível cadastrar!');</script>";
    print "<script>location.href='?page=index');</script>";
  }
  break;

  case 'login':
          // code...
  break;

  case 'sair':
          // code...
  break;
}