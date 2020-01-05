<?php


$name = 'Hcode Treinamentos';
$replace = 'Cursos';

$new_name = substr($name,0,strpos($name,'T')).$replace;

echo $new_name; 

///neste caso o que vai retornar sera o conteudo do indice 0 ate T, os valores a partir de T nao retornarão e serao substituidos pela variavel concatenada que no caso é $replace (cursos) entao vai vir Hcode Cursos; 

///H = 0, a partir de T nao sera mostrado e replace que esta concatenado sera mostrado.


?>