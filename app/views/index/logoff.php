<?php
 $login = $_SESSION['login'];
 $nome  = $_SESSION['nome'];

if(isset($login) && isset($nome)){
    $acesso = array($login, $nome);
    unset($acesso);
}
session_destroy();
header("location: /cadastro");