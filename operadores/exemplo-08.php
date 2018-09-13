<?php 

///Precedencia de Operadores

//Operadores Matemáticos
$resultado = (10 + 3) / 2;

echo $resultado;

echo "<br>";

//Operadores Lógicos
$valida = $resultado > 5 && 10 + 5 > 20;
var_dump($valida);

$valida = $resultado > 5 || 10 + 5 < 10;
var_dump($valida);
 ?>