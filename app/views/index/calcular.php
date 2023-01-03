<?php
//echo "<br><br>Sou a página calcular <br><br>";

//echo "<br><br>";
$calcular = filter_input_array(INPUT_POST, FILTER_DEFAULT);
/* echo "<br><br> variavel calcular";
print_r($calcular);
echo "<br><br>"; */

$acalcular = ($calcular['meta'] * $calcular['qtdDias'] * $calcular['viagem']);
$cents = 0.20;
$resultado = ($cents * $acalcular);
$_SESSION['resultado'] = $resultado;
header("Location: /simulador");
