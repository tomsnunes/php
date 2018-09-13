<?php 

///Strings

//Interpolação de Váriaveis

//Diferença entre aspas simples e duplas
$aspas1 = "Duplas";

$aspas2 = 'Simples';
var_dump($aspas1,$aspas2);

echo "<br>";

//Aspas Duplas permite interpolação de variáveis
echo "Aspas $aspas1";

echo "<br>";
//Aspas Simples é tratado somente texto
echo 'Aspas $aspas2';
 ?>