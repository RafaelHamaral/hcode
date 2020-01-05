<?php

$condicao = true;


while($condicao){

	$numero = rand(1, 10);//rand funçao randomica do php para numeros aleatorios

	if ($numero === 3){

		echo "TRÊS <br>";
		$condicao = false; // quando for tres a condiçao passa a ser falsa 
	}

	echo $numero. " ";

}


?>