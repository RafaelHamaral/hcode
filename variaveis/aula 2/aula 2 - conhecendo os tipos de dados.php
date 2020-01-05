<?php


$anoNascimento = 1998; //camelCase

$nome1 = "Rafael";

$sobrenome = "Holanda";

$nomeCompleto = $nome1 ." ".$sobrenome; //concatenação - pode ser junto ou separado, " " para separar os nomes senao ficam juntas a concatenaçao (colado)


echo $nomeCompleto;

exit; // com o exit o php para a execução neste ponto



echo $nome1;

echo "<br/>";

//unset($nome1); // limpar a variavel para usar no futuro

if (isset($nome1)){

	echo $nome1;
}



/* 

camelCase -> Comece com a primeira letra minuscula, se for uma palavra composta, para cada nome a primeira letra maiuscula. (é um padrao mas nao é obrigatorio)

caracteres especiais: o unico permitido é o _ (underscore, underline)
	
case sensitive
	
variavel nao pode comecar com numero: $1nome = "";	



*/
?>