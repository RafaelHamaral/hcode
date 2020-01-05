<?php

//controle de fluxo - comandos de decisão

$qualASuaIdade = 11;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualASuaIdade < $idadeCrianca){

	echo "Criança";

}else if($qualASuaIdade < $idadeMaior){ //else sempre no final e é usado apenas uma vez, o primeiro é sempre if

	echo "Adolecente"; 
}else if($qualASuaIdade < $idadeMelhor){

	echo "Adulto";
}else{

	echo "Idoso";
}

//elseif ou else if sao a mesma coisa

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Marior de Idade";

//< se menor, ? entao, :senao


?>