<?php

$frase = "A repetição é a mae da retenção";


//pegar indice de determinada frase
$q = strpos($frase,"mae");// qual é o alvo ($variavel), oque eu estou procurando e o retorno é o indice onde esta o que eu busco. 

var_dump($q);

//pegar indice de determinada frase até uma determinada posição

$texto = substr($frase, 0, 17);//qual é o alvo($variavel), a partir de qual posição eu quero minha busca, e até qual posição eu quero (indice)

var_dump($texto);

$texto2 = substr($frase, $q); 



?>