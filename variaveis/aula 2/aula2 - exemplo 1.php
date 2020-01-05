<?php

//tipos basicos - caracter, inteiro, real e booleano
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1900;
$salario = 5900.99;
$bloqueado = false;


//tipos compostos - array, objeto
$frutas  = array("abacaxi","laranja","manga");//o php pode colocar qualquer tipo de array e nao separa pelo tipo
echo $frutas[2];//manga pois começa do 0

$nascimento = new DateTime(); //new é para orientaçao a objetos

//var_dump($nascimento);

//tipos especiais - null, resource

$arquivo = fopen("aula2 - exemplo 1.php", "r"); //resource

//var_dump($arquivo);

$nulo = NULL; //nulo é ausencia de valor, vazio é uma variavel que ja foi iniciado e ocupa espaço na memoria. 

?> 