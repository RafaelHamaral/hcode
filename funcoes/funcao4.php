<?php

function ola(){

    $argumentos = func_get_args();//retorna num array todos os argumentos passados nessa funcao

    return $argumentos;

}

var_dump(ola("bom dia",10,"Como vai?",100.00))

/*essa funcao é interessante pois em uma unica funcao posso
fazer uma sobrecarga ou seja, chamar diversos parametros em uma array
Posso fazer acoes diferentes dentro desta funcao*/


?>