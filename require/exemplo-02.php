<?php 

//Solicita um arquivo php externo
require "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

echo "<br>";

//Solicita uma unica vez um arquivo php externo 
require_once "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;
 ?>