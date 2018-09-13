<?php 

//Inclue um arquivo php externo
include "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

echo "<br>";

//Inclue uma unica vez um arquivo php externo 
include_once "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;
 ?>