<?php
// null coalescing - O operador ?? (null coalesce) ficará responsável por retornar o primeiro valor que existe e não nulo.


$a = NULL;

$b = NULL;

$c = 10;


echo $a ?? $b ?? $c;



// caso o valor nao seja passado o valor sera 1

?>