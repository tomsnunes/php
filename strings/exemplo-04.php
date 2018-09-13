<?php 

///Strings

//Posição de Caracteres

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

//Encontra a posição da primeira ocorrência de uma string
$q = strpos($frase, $palavra);

//Retorna parte de uma string
$inicioFrase = substr($frase, 0, $q);
var_dump($inicioFrase);
echo "<br>";

//Retorna o número de caracteres em uma string
$finalFrase = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($finalFrase);
echo "<br>";
 ?>