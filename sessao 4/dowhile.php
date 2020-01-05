<?php

$total = 100;
$desconto = 0.9;

do { //do while - executa pelo menos uma vez mesmo a condicao sendo falsa. 

	$total *= $desconto;

} while ($total > 100);

echo $total;


?>