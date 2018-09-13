<?php

$nome = 'Wellington';

$sobrenome = 'Nunes';

// Nomes de Variáveis em Camel Case
$anoNascimento = 1991;

//Concatenação de Variáveis
$nomeCompleto = $nome . ' ' .$sobrenome;

//Eliminar Variavel da Memória
unset($anoNascimento);

//Verificar Inicialização de Variaveis
if (isset($anoNascimento)) {
	echo $anoNascimento;
}

//Tag HTML incorporada
echo "<br>";

if (isset($nomeCompleto)) {
	echo $nomeCompleto;
}

?>