<?php


//$nome = (int) $_GET["a"];//nome da chave que eu quero "". 
//$_GET[] - vai ter todas as variaveis que recebemos atraves de uma URL - metodo GET --- o (int) esta fazendo a conversao da variavel para inteiro, pois todo metodo get ou post vai enviar uma string

//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"]; // superglobal para pegar o ip do usuário

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;


?>