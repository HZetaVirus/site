<?php
	include_once 'conexao.php';
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/estilo_registrese.css">
<meta charset="utf-8">
<title>Projeto - Registre-se</title>
</head>
<body>
<center>
<h1>REGISTRE-SE</h1>
<br><br>
<form action="registrar2.php" name="registrar" method="post">
NOME
<br>
<input type="text" name="nome">
<br>
CELULAR
<br>
<input type="text" name="celular">
<br>
CIDADE
<br>
<input type="text" name="cidade">
<br>
Estado
<br>
<input type="text" name="estado">
<br>
<button type="submit" name="registrar" value="1">REGISTRAR</button>
</form>
</center>
</body>
</html>