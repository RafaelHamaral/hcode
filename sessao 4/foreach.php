<?php

$meses = array("Janeiro", "Fevereiro","Março","Abril","Maio","Junho","Julio","Agosto","Setembro","Outubro","Novembro","Dezembro");
//foreach ($meses as $mes) {//desta maneira eu só trouxe o valor.

	foreach($meses as $index => $mes){//desta maneira mostra a posição do array. (=>)

	echo "Indice: ".$index."<br>";
	echo "O mes é: ".$mes."<br><br>";
}

?>