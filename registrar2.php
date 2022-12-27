<?php
  include 'conexao.php';
  $nome = $_POST["nome"];
  $celular = $_POST["celular"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];

$comando = "INSERT INTO novo_usuario(nome,celular,cidade,estado) VALUES('$nome', '$celular', '$cidade', '$estado')";
$resulta = $conexao->query($comando);

if (mysqli_connect_error()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

if ( false === $resultado_usuario ) {
printf("error: %s\n", mysqli_error($conn));
  }

 if(mysqli_insert_id($conn)){
 $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
 header("Location: dasboard.html");
 }else{
 $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
 header("Location: painel.html");
 } 
  
  ?>