<?php


 $dt = new DateTime();//instanciando a classe/metodo construtor
 //a variavel é um objeto - instancia da classe

$periodo = new DateInterval("P15D");//objeto - P15D (periodo 15 dias)

echo $dt->format("d/m/Y H:i:s");

 $dt->add($periodo);//add - adicionar uma data 

 echo "<br>";
 
 echo $dt->format("d/m/Y H:i:s");//dt objeto que instancia uma classe



?>