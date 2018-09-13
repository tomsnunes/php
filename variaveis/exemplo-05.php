<?php 
//Escopo de Váriavel e Variaveis Globais

$nome = "Wellington Nunes";

//Declaração de Função
function nomeUsuario() {
	//Invocação de Variavel Global
	global $nome;
	echo($nome);
}
//Invocação de Função
nomeUsuario();
 ?>