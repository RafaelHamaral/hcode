<?php


$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);//transforma o json (padrao) em array
//passo o parametro true se nao ele vai jogar como objeto.
//se nao tiver o true ele nao transforma tudo em array

var_dump($data);

?>