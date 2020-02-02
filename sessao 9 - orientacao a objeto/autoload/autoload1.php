<?php

//instanciar a classe delrey
//ambos na mesma pasta

function __autoload($nomeClasse){//metodo magico   $nomeClass = nome da classe que foi chamada

   var_dump($nomeClasse);
    require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(80); 

?>