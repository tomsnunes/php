<?php 

///Variaveis Predefinidas ou Arrays Super Globais
//Captura Parametros na URL através do metodo GET
$nome = $_GET["usuario"];

//Define o tipo de dados como inteiro
$userID = (int)$_GET["userid"];

//Obtem o endereço remoto do cliente
$ip = $_SERVER["REMOTE_ADDR"];

var_dump($nome);

echo "<br>";

var_dump($userID);

echo "<br>";

var_dump($ip);

 ?>